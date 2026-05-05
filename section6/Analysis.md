# SoluLab AI Chatbot CTA — Dev Notes

## Overview

A hero CTA section with a dark radial gradient background, red dot texture, headline/button on the left, and an SVG illustration on the right.

---

## DOM Structure

```html
<section class="cta-section">
  <div class="red-dots"><!-- inline SVG dot texture --></div>
  <div class="cta-inner">
    <div class="cta-content"><!-- h1 + p + button --></div>
    <div class="cta-visual"><!-- main illustration SVG --></div>
  </div>
</section>
```

---

## Before vs After Learnings

| Assumption | Reality |
|---|---|
| Red dots = CSS background | Inline SVG using `mix-blend-mode: color-dodge` — requires inline for blend mode to work |
| One breakpoint needed | Two breakpoints (900px, 560px) — but still missing `flex-direction: column` at mobile |
| Layout is production-ready | Several unitless values and one wrong property silently ignored by browsers |
| Button font size is set | `font-size: 25` has no unit — browser falls back to 16px |

---

## Logic Challenges

### 1. `position: absolute` on the section
Removes the section from document flow — works only if the parent has `position: relative` and an explicit height. Risky in most real page contexts.

### 2. Unitless CSS values (silently ignored)
```css
font-size: 25;      /* needs px */
gap: 20;            /* needs px */
border-spacing: 40; /* wrong property for flex — remove it */
```

### 3. Red dots SVG clipped intentionally
The SVG viewBox is `0 0 780 460` but the container is only `height: 80px` — shows a top strip of dots as a decorative border, not a full background fill.

### 4. Mobile layout doesn't stack
Neither breakpoint adds `flex-direction: column`, so text and illustration stay side-by-side on small screens.

---

## Quick Fixes

```css
/* Stack on mobile */
@media (max-width: 560px) {
  .cta-inner {
    flex-direction: column;
  }
}

/* Fix unitless values */
.cta-inner  { gap: 40px; }
.btn-cta    { font-size: 16px; }
```

---

## Accessibility Notes
- Add `aria-hidden="true"` to both SVGs so screen readers skip them
- Replace `BUTTON` placeholder text with a descriptive label

---

*Component: SoluLab AI Chatbot Hero CTA | May 2026*