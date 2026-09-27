---
name: Cœur de la Forêt
colors:
  surface: '#fcf9f6'
  surface-dim: '#dcdad7'
  surface-bright: '#fcf9f6'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f6f3f0'
  surface-container: '#f0edea'
  surface-container-high: '#eae8e5'
  surface-container-highest: '#e5e2df'
  on-surface: '#1c1c1a'
  on-surface-variant: '#574235'
  inverse-surface: '#31302f'
  inverse-on-surface: '#f3f0ed'
  outline: '#8b7263'
  outline-variant: '#dec1af'
  surface-tint: '#954a00'
  primary: '#954a00'
  on-primary: '#ffffff'
  primary-container: '#ff8200'
  on-primary-container: '#5f2c00'
  inverse-primary: '#ffb785'
  secondary: '#006d40'
  on-secondary: '#ffffff'
  secondary-container: '#7bf7b0'
  on-secondary-container: '#007244'
  tertiary: '#7b5647'
  on-tertiary: '#ffffff'
  tertiary-container: '#c89a8a'
  on-tertiary-container: '#523226'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#ffdcc6'
  primary-fixed-dim: '#ffb785'
  on-primary-fixed: '#301400'
  on-primary-fixed-variant: '#723700'
  secondary-fixed: '#7efab3'
  secondary-fixed-dim: '#61dd98'
  on-secondary-fixed: '#002110'
  on-secondary-fixed-variant: '#00522f'
  tertiary-fixed: '#ffdbce'
  tertiary-fixed-dim: '#ecbcaa'
  on-tertiary-fixed: '#2e140a'
  on-tertiary-fixed-variant: '#613e31'
  background: '#fcf9f6'
  on-background: '#1c1c1a'
  surface-variant: '#e5e2df'
typography:
  headline-xl:
    fontFamily: Montserrat
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Montserrat
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Montserrat
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 34px
  headline-md:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '600'
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
  unit: 8px
  container-max: 1280px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 40px
---

## Brand & Style

The design system embodies the warmth, hospitality, and economic vitality of Daloa. It balances the rigor of public service with the welcoming energy of a regional hub. The style is **Corporate Modern** with **Tactile** accents, utilizing high-quality whitespace and professional layouts while grounding them in the organic textures of the Ivorian landscape. 

The visual narrative shifts between "Smart City" efficiency—characterized by clean grids and clear information architecture—and "Cultural Pride," expressed through subtle geometric patterns and a rich, earth-toned secondary palette. The target audience includes local citizens, the diaspora, and international investors who seek a city that is both technologically forward-leaning and deeply rooted in tradition.

## Colors

The palette is a sophisticated interpretation of the national identity fused with local agricultural heritage.

- **Primary (Heritage Orange):** Used for calls to action, urgent alerts, and energetic brand moments. It represents the sun and the dynamic future of the city.
- **Secondary (Forest Green):** Used for environmental initiatives, health services, and growth-related content.
- **Tertiary (Cacao Bean):** A deep, earthy brown used for secondary text, footer backgrounds, and structural elements to provide a grounded, high-end feel.
- **Neutral (Sand & Ivory):** A warm off-white background (#F8F5F2) is preferred over pure white to reduce eye strain and evoke the natural environment.

Functional colors (Success, Warning, Error) should be derived from the secondary and primary hues where possible to maintain harmony.

## Typography

This design system utilizes a dual-font approach to balance character and clarity.

- **Headlines:** Montserrat provides a bold, geometric confidence. Use it for page titles, hero sections, and major category headers.
- **Body & UI:** Inter is used for all functional text, data, and long-form reading. Its high legibility ensures accessibility for all citizens across various devices.
- **Styling:** Maintain generous paragraph spacing (1.5x - 1.6x) to ensure government documents and news articles are easily digestible.

## Layout & Spacing

The layout follows a **Fluid Grid** model based on an 8px base unit. 

- **Desktop:** 12-column grid with 24px gutters. Content is centered within a 1280px max-width container.
- **Tablet:** 8-column grid with 20px gutters.
- **Mobile:** 4-column grid with 16px gutters and 16px side margins.

Use "Vertical Rhythm" by ensuring all component heights and vertical gaps are multiples of 8px. Large sections should be separated by 80px or 120px to create a sense of openness and premium quality.

## Elevation & Depth

To maintain a "Smart City" professional aesthetic, depth is achieved through **Tonal Layers** and **Soft Ambient Shadows**.

- **Surfaces:** Use subtle shifts in background color (e.g., Cacao Brown at 5% opacity) to define content areas rather than heavy lines.
- **Shadows:** Avoid harsh blacks. Use the Tertiary color (Cacao) for shadow tints: `box-shadow: 0 4px 20px rgba(75, 44, 32, 0.08)`.
- **Watermarks:** Incorporate traditional Bété geometric motifs as low-opacity SVG backgrounds (2-3% opacity) within large sections or cards to add cultural texture without hindering readability.

## Shapes

The shape language is **Rounded**, reflecting the approachable nature of the city's services. 

- **Standard Elements:** Buttons and input fields use a 0.5rem (8px) radius.
- **Large Components:** Cards and image containers use 1rem (16px) or 1.5rem (24px) for a more modern, friendly look.
- **Decorative Elements:** Use circular or organic "bean-shaped" masks for photography related to tourism and agriculture.

## Components

- **Buttons:** Primary buttons use a solid Heritage Orange background with White text. Secondary buttons use a Forest Green outline with 2px stroke. Interaction states (hover/active) should slightly darken the background color.
- **Cards:** Cards should have a white background, a very soft Cacao-tinted shadow, and a 1px border in a pale neutral. For tourism-related cards, apply a Bété motif border-pattern on the top edge.
- **Inputs:** Form fields use a light neutral fill and a 1px border. On focus, the border transitions to Forest Green.
- **Chips/Badges:** Use low-saturation versions of the primary/secondary colors for tags (e.g., a pale green background for "Open" or "Active").
- **Navigation:** Top navigation should be clean and sticky, using the primary brand colors for active states. Use a "Mega Menu" for city services, categorized with small icons.
- **Traditional Accents:** Use Bété-inspired dividers—thin horizontal lines with a small geometric diamond in the center—to separate sections of text.