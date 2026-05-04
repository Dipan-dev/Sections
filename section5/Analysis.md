# Enhance Your User Experience — Section Analysis

> Development analysis for the **"Enhance your User Experience With AI Chatbot Development Services"** section of the SoluLab website. Documents what I knew before building it, what I learned after, and every decision made along the way.

---

## Section Overview

This section sits on a **white background** and is split into two columns:

| Side | Content |
|---|---|
| **Left** | Dark navy rounded box (`border-radius: 20px`) containing a 3D isometric robot illustration |
| **Right** | Bold headline, descriptive paragraph, 4-item bullet list |

**Frame size:** `1920 × 908px`
**Background:** `#ffffff` (plain white)
**Font:** Inter

**Visual reference:**


## Before Development

### What I Thought Before Starting

Before building this section, my understanding was:

- The layout looked simple — just an image on the left, text on the right
- I assumed the robot inside the dark box was a **PNG or JPG image** I could just drop in with `<img>`
- I thought the dark box was just a `<div>` with a dark background color
- The bullet list looked like a standard HTML `<ul>` with default browser styling
- I assumed this section would be the easiest of all three to build

### Knowledge Gaps Before Starting

| What I Did Not Know | Why It Mattered |
|---|---|
| How to make the image box perfectly square at all screen sizes | Without this the box stretches unevenly on different screens |
| How `object-fit: contain` works inside a fixed box | Without it the illustration would stretch or overflow |
| How to replace default bullet dots with custom ones | Default browser bullets look inconsistent across browsers |
| How `flex: 0 0 580px` prevents shrinking | Without fixed flex basis the box shrinks on smaller screens |
| How to handle the white section between two dark sections | Needed to understand section spacing and background switching |

### Wrong Assumptions

**Assumption 1 — "This is just an image"**
I assumed I could find a robot PNG online and drop it in. The actual illustration needed to be built in SVG code from scratch because no matching image file existed.

**Assumption 2 — "Bullet points are simple"**
Default `<ul>` bullets look different in every browser and do not match the subtle dot style in the design. Custom bullets need `list-style: none` and a `::before` pseudo-element.

**Assumption 3 — "The section height just adjusts to content"**
At 1920px wide the section needs `min-height: 908px` explicitly set, and the content needs to be vertically centered inside it with `align-items: center` on the flex container.

---

## After Development


## Challenges & Fixes

| Challenge | What Went Wrong | Fix Applied |
|---|---|---|
| Image box shrinking on laptop | Did not use `flex: 0 0 580px` | Added fixed flex basis |
| Illustration getting cropped | Default `overflow: hidden` clipped corners of SVG | Used `object-fit: contain` |
| Bullets looked inconsistent | Used default `<ul>` browser styling | Custom `::before` pseudo-element |
| Section not vertically centered | Content was top-aligned at 908px height | Added `align-items: center` on `.container` |
| Box looked flat | Used flat `background-color` |

| Text too wide on large screens | No `max-width` on text column | Added `max-width: 580px` on `.text-content` |

---

## Key Takeaways

```
1. A flat background-color rarely matches a design — always check for gradients
2. flex: 0 0 Xpx locks a column to a fixed size and prevents shrinking
3. list-style: none + ::before gives full control over bullet styling
4. object-fit: contain keeps illustrations fully visible inside fixed boxes
5. min-height + align-items: center is the right combo for tall centered sections
6. max-width on the text column prevents lines from becoming too long to read
7. Always collapse to flex-direction: column on tablet for two-column layouts
8. border-radius: 10px on the image box matches the soft rounded card look
```

---

*Section: Enhance Your User Experience With AI Chatbot Development Services*
*Frame: 1920 × 908px*
*Last updated: May 2026*