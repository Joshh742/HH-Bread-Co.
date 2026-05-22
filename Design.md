---
name: Artisan Sun-Drenched Bakery
colors:
    surface: "#faf9f6"
    surface-dim: "#dbdad7"
    surface-bright: "#faf9f6"
    surface-container-lowest: "#ffffff"
    surface-container-low: "#f4f3f1"
    surface-container: "#efeeeb"
    surface-container-high: "#e9e8e5"
    surface-container-highest: "#e3e2e0"
    on-surface: "#1a1c1a"
    on-surface-variant: "#4c4634"
    inverse-surface: "#2f312f"
    inverse-on-surface: "#f2f1ee"
    outline: "#7e7762"
    outline-variant: "#cfc6ae"
    surface-tint: "#705d00"
    primary: "#705d00"
    on-primary: "#ffffff"
    primary-container: "#f4d03f"
    on-primary-container: "#6c5900"
    inverse-primary: "#e7c433"
    secondary: "#635d5a"
    on-secondary: "#ffffff"
    secondary-container: "#e6ded9"
    on-secondary-container: "#67625e"
    tertiary: "#944a00"
    on-tertiary: "#ffffff"
    tertiary-container: "#ffc7a1"
    on-tertiary-container: "#8e4700"
    error: "#ba1a1a"
    on-error: "#ffffff"
    error-container: "#ffdad6"
    on-error-container: "#93000a"
    primary-fixed: "#ffe174"
    primary-fixed-dim: "#e7c433"
    on-primary-fixed: "#221b00"
    on-primary-fixed-variant: "#554500"
    secondary-fixed: "#e9e1dc"
    secondary-fixed-dim: "#cdc5c0"
    on-secondary-fixed: "#1e1b18"
    on-secondary-fixed-variant: "#4b4642"
    tertiary-fixed: "#ffdcc5"
    tertiary-fixed-dim: "#ffb783"
    on-tertiary-fixed: "#301400"
    on-tertiary-fixed-variant: "#713700"
    background: "#faf9f6"
    on-background: "#1a1c1a"
    surface-variant: "#e3e2e0"
typography:
    display-lg:
        fontFamily: Playfair Display
        fontSize: 56px
        fontWeight: "700"
        lineHeight: 64px
        letterSpacing: -0.02em
    headline-lg:
        fontFamily: Playfair Display
        fontSize: 32px
        fontWeight: "700"
        lineHeight: 40px
    headline-lg-mobile:
        fontFamily: Playfair Display
        fontSize: 28px
        fontWeight: "700"
        lineHeight: 36px
    headline-md:
        fontFamily: Playfair Display
        fontSize: 24px
        fontWeight: "600"
        lineHeight: 32px
    body-lg:
        fontFamily: Be Vietnam Pro
        fontSize: 18px
        fontWeight: "400"
        lineHeight: 28px
    body-md:
        fontFamily: Be Vietnam Pro
        fontSize: 16px
        fontWeight: "400"
        lineHeight: 24px
    label-md:
        fontFamily: Be Vietnam Pro
        fontSize: 14px
        fontWeight: "600"
        lineHeight: 20px
        letterSpacing: 0.05em
rounded:
    sm: 0.25rem
    DEFAULT: 0.5rem
    md: 0.75rem
    lg: 1rem
    xl: 1.5rem
    full: 9999px
spacing:
    base: 8px
    container-max: 1200px
    gutter: 24px
    margin-desktop: 64px
    margin-mobile: 20px
---

## Brand & Style

The design system evokes the warmth of a high-end artisanal bakery at sunrise. The brand personality is welcoming, premium, and authentic, focusing on the sensory experience of "Aroma & Hearth."

The visual style blends **Minimalism** with **Tactile** warmth. It prioritizes generous whitespace and high-quality editorial photography, balanced by a vibrant, golden-hour color palette. The goal is to move away from clinical modernism toward a "human-centric" luxury that feels handcrafted yet professional.

## Colors

The palette is anchored by a vibrant golden yellow (`#F4D03F`), representing quality and optimism. To maintain the "Aroma & Hearth" foundation, we utilize a warm off-white (`#FAF9F6`) for primary surfaces, creating a soft, parchment-like canvas.

**Accessibility Note:** Since vibrant yellow has low contrast against white, it is primarily used as a background for interactive elements (buttons, chips) paired with the secondary "Espresso" (`#2D2926`) for text and icons. Never use white text on yellow surfaces. The secondary color is used for typography to ensure deep, legible contrast that feels softer than pure black.

## Typography

The typographic hierarchy relies on the high-contrast elegance of **Playfair Display** for all headlines. This serif typeface provides the "artisan" character and authoritative warmth necessary for the brand.

For functional text, **Be Vietnam Pro** is used. Its contemporary, friendly letterforms provide excellent readability at small sizes while maintaining the approachable tone of the design system. Labels use an uppercase treatment with slight tracking to provide clear UI signposting without competing with the serif headlines.

## Layout & Spacing

The design system utilizes a **fixed-width grid** for desktop to maintain an editorial, boutique feel, transitioning to a fluid model for mobile devices.

A 12-column grid is used for desktop (1200px max-width) with generous 24px gutters. On mobile, we use a 4-column grid with 20px side margins. Spacing between sections should be expansive (80px–120px) to allow the "Aroma & Hearth" theme to breathe, emphasizing quality over quantity.

## Elevation & Depth

This design system uses **Tonal Layers** rather than heavy shadows to signify depth. Interactive surfaces sit on a "Surface-1" layer (the off-white parchment), while elevated cards use a slightly lighter "Surface-2" (pure white) with an extremely soft, amber-tinted shadow (4% opacity, 12px blur) to suggest warmth.

Interactive elements like buttons do not use shadows; instead, they use high-contrast color fills. Depth is often communicated through subtle 1px borders in a muted gold or light taupe.

## Shapes

We employ a **Rounded** (Level 2) shape language. This softens the UI, making it feel more organic and inviting, echoing the shapes of loaves and bakery goods.

Standard components (buttons, inputs) use a 0.5rem (8px) corner radius. Larger containers, such as product cards or featured sections, utilize a 1rem (16px) radius. This creates a consistent visual rhythm that is friendly but remains structured and premium.

## Components

- **Buttons:** Primary buttons are filled with the vibrant yellow (`#F4D03F`) and use the secondary espresso (`#2D2926`) for text. This ensures AA accessibility. Secondary buttons are outlined in espresso with a transparent background.
- **Input Fields:** Use the warm off-white background with a 1px taupe border. On focus, the border transitions to a 2px golden yellow stroke. Labels sit above the field in `label-md`.
- **Cards:** Product and content cards use a pure white background with a 1px border (`#E5E4E2`). On hover, the card should lift slightly with a subtle warm glow.
- **Chips:** Small, rounded elements used for categories (e.g., "Sourdough," "Pastries"). They use a light-tinted yellow background with espresso text to maintain the "sun-drenched" feel.
- **Checkboxes/Radios:** Use the espresso color for the active state to ensure high visibility against the light parchment backgrounds.
