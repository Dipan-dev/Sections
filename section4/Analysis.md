# SVG Animation on Card Grids — Before & After Development Learnings

> A personal learning log covering the journey from zero knowledge to a working animated card grid using CSS and inline SVG.

---

## Before Development

### What I Knew

- Basic HTML and CSS layout (divs, padding, margin)
- CSS Grid existed and could make columns
- SVG was "some kind of image format"
- Animations in CSS existed but felt advanced

### Assumptions I Had (That Turned Out to Be Wrong)

- I thought SVG animations required a JavaScript library like GSAP or anime.js
- I assumed `transform-origin` in SVG worked the same way as in regular HTML (it does not — SVG uses coordinate units, not percentages)
- I thought `auto-fit` and `auto-fill` in CSS Grid were the same thing
- I assumed you could just drop an SVG into a card and CSS transitions would "just work" on it

### Questions I Had Going In

- How do I make a card grid that is responsive without writing media queries?
- How do I make an icon animate only when the user hovers the card?
- What is `viewBox` and why does it matter?
- Why does rotation look off-center sometimes?

### Skill Level: Beginner

---

## During Development

### Problems I Hit

**1. Rotation spinning from the wrong corner**

The icon was spinning from its top-left corner instead of its center. This happened because SVG `transform-origin` defaults to `0 0` (the top-left of the entire SVG canvas), not the center of the element.

**Fix:** Set `transform-origin` explicitly using the SVG coordinate center:
```css
/* For a 44x44 viewBox */
.icon-group {
  transform-origin: 22px 22px;
}

/* For a 150x150 viewBox */
.icon-group {
  transform-origin: 75px 75px;
}
```

The rule: `transform-origin = viewBox width / 2, viewBox height / 2`

---

**2. Animation triggering on the whole card, not just the icon**

I was putting the `animation` property on the card itself. The correct pattern is to trigger on the card hover but target only the inner icon group.

**Fix:**
```css
/* Wrong */
.card:hover {
  animation: spin 0.6s ease;
}

/* Correct */
.card:hover .icon-group {
  animation: spin 0.6s ease;
}
```

---

**3. Stroke draw animation not working**

The checkmark path was not animating because I did not know the total length of the path, so `stroke-dasharray` was set to the wrong value.

**Fix:** Measure the path length in the browser console first:
```javascript
const path = document.querySelector('.draw-path');
console.log(path.getTotalLength()); // e.g. 48
```
Then set both `stroke-dasharray` and `stroke-dashoffset` to that value. On hover, transition `stroke-dashoffset` to `0`.

---

**4. `<g>` wrapping was missing**

Without wrapping SVG shapes in a `<g>` element, there is nothing to apply `transform-origin` to. Each shape transforms independently from its own origin.

**Fix:** Always wrap icon shapes in a `<g class="anim">` and apply the transform-origin to the group.

---

## After Development

### What I Now Understand

**CSS Grid**
- `repeat(auto-fit, minmax(160px, 1fr))` creates a responsive grid with no media queries
- `auto-fit` collapses empty columns; `auto-fill` keeps them — use `auto-fit` for card grids
- Three grid approaches exist: fixed columns, auto-fit (responsive), and flexbox wrap

**SVG Fundamentals**
- `viewBox="0 0 W H"` defines the internal coordinate system, separate from the rendered size
- All coordinate-based values (like `transform-origin`) must use viewBox units, not CSS pixels
- Shapes must be centered inside the viewBox for rotation/scale to look natural

**The 5 SVG Animation Patterns**

| Animation | Technique | Best For |
|---|---|---|
| Spin | `rotate(360deg)` on hover | Settings, refresh icons |
| Bounce | `translateY` keyframes | Notifications, alerts |
| Pulse scale | `scale(1.3)` keyframes | Favorites, hearts |
| Wobble | `rotate` back and forth | Bell, warning icons |
| Stroke draw | `stroke-dashoffset` transition | Checkmarks, paths |

**Key CSS rules for all animations:**
```css
/* Trigger on card hover, animate the icon group */
.card:hover .anim {
  animation: spin 0.6s ease-in-out;
}

/* Transform origin must match SVG center coordinates */
.anim {
  transform-origin: 22px 22px; /* half of viewBox width and height */
}

/* Define the keyframes */
@keyframes spin {
  to { transform: rotate(360deg); }
}
```

**Stroke draw — special case:**
```css
.draw-path {
  stroke-dasharray: 120;    /* total path length */
  stroke-dashoffset: 120;   /* fully hidden at start */
  transition: stroke-dashoffset 0.6s ease;
}
.card:hover .draw-path {
  stroke-dashoffset: 0;     /* fully visible on hover */
}
```

### What I Would Do Differently

- Measure path lengths with `getTotalLength()` before writing the CSS, not after
- Set `transform-origin` first before testing any animation, to avoid confusion
- Use `transform-box: fill-box; transform-origin: center` as a quick fallback when icons are not centered in their viewBox

### Tools and Resources That Helped

- Browser DevTools (Elements panel) for inspecting SVG coordinates
- `path.getTotalLength()` in the console for stroke-draw measurements
- MDN Web Docs for `@keyframes` and `stroke-dashoffset` reference

---

## Quick Reference Card

```
viewBox size  →  transform-origin
44 × 44       →  22px 22px
100 × 100     →  50px 50px
150 × 150     →  75px 75px
200 × 100     →  100px 50px
Formula: width/2  height/2
```

---

## Summary

The biggest shift was understanding that **SVG has its own coordinate system** that is independent of the CSS box model. Once that clicked, all the animation work became straightforward. The `@keyframes` patterns are simple — the hard part is getting `transform-origin` right so the animation pivots from the correct point.

---

*Last updated: May 2026*