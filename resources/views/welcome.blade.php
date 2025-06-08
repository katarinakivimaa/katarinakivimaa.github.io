<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kiiu Tuulik</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0px
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-sm {
            border-radius: 0.125rem
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #FF2D20
        }

        .object-cover {
            object-fit: cover
        }

        .object-top {
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-semibold {
            font-weight: 600
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8)
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
            }
        }
    </style>
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @extends('partials.layout')
@section('content')

<div class="w-full h-screen">
    <div style="background-image: url('/kiiu_hero_banner.jpg');" class="absolute top-0 bg-cover bg-center bg-[url('/kiiu_hero_banner.jpg')] w-full h-screen"></div>
    <div class="relative z-10 text-white pt-96 ml-24">
        <div class="text-3xl font-primary">

            <p class="mb-2">Come and discover
                <span class="uppercase font-bold text-primary">Kiiu Tuulik</span>
            </p>
            <p class="font-primary text-6xl capitalize">Discover history</p>
            <p class="font-primary text-6xl capitalize mb-6">
                Through
                <span class="text-primary">Wonderful Discovery</span>.
            </p>
        </div>

        <div class="flex z-10 font-primary text-2xl space-x-6">
            <button
                class="bg-primary hover:bg-white text-white hover:text-primary border-primary transition px-8 py-3 rounded-xl text-lg font-semibold">
                Donate
            </button>
            <button
                class="bg-primary hover:bg-white text-white hover:text-primary border-primary transition px-8 py-3 rounded-xl text-lg font-semibold">
                Shop
            </button>
        </div>
    </div>
</div>

<div class="w-full bg-primary flex justify-center items-center py-10">
    <div class="flex justify-center items-center gap-16 max-w-7xl px-6">
        <div class="flex flex-col justify-center items-center gap-8 max-w-xl text-center">
            <div class="text-white text-8xl font-normal font-['KoHo']">
                History
            </div>
            <div class="flex space-y-4 flex-col gap-10 max-w-xl">
                <div>
                    <h2 class="text-white text-3xl font-bold font-['KoHo'] mb-2">Grant Wood</h2>
                    <p class="text-white text-base font-normal font-['KoHo'] leading-relaxed">
                        Grant Wood, famous for his representations of the Midwest—of which the Art Institute’s American Gothic (1930.934) is his most recognizable example—intended The Pump to be an illustration for Sinclair Lewis’s novel Main Street (1920).
                    </p>
                </div>
                <div>
                    <h2 class="text-white text-3xl font-bold font-['KoHo'] mb-2">American Gothic</h2>
                    <p class="text-white text-base font-normal font-['KoHo'] leading-relaxed">
                        This image of a contemporary water pump would have been a perfect fit for Lewis’s novel about life in a midwestern town. The drawing was given to the Art Institute by Carter Manny, Jr., who received it as a high school graduation gift from the artist in 1937.
                    </p>
                </div>
            </div>
        </div>
        <img
            class="w-96 rounded-t-[200px]" style="border-top-left-radius: 200px; border-top-right-radius: 200px"
            src="/kiiu_pilt.jpg" />
    </div>
</div>


<div class="w-full p-16 bg-primary">
    <div class="absolute w-full top-8 mt-8 my-16"></div>
    <div class="relative pt-6 z-10 mx-32 text-white flex items-center gap-6">
        <div class="inline-flex justify-center w-24 items-center gap-16 text-center">
            <div class="inline-flex w-12 flex-col justify-center items-center gap-3.5">
                <img style="width: auto; height: 360px; border-top-right-radius: 160px; border-bottom-left-radius: 160px" src="/lydia.jpg" />
                <div class="self-stretch justify-center items-start gap-14">
                    <div class="w-7 h-5 justify-center text-xl font-medium ">1631</div>
                    <div class="w-52 h-5 text-right justify-center text-m ">Rembrandt Harmensz. van Rijn</div> <br>
                </div>
                <div class="w-64 h-5 justify-center text-xl mb-4  font-bold ">Old Man with a Gold Chain</div>
                <div class="w-64 justify-center text-m">This evocative character study is an early example of a type of subject that preoccupied the great Dutch master Rembrandt van Rijn throughout his long career. Although his large output included landscapes, genre paintings, and the occasional still.</div>
            </div>
            <div class="inline-flex w-12 flex-col justify-start items-center gap-3.5">
                <img style="width: auto; height: 360px; border-top-left-radius: 160px; border-top-right-radius: 160px" src="/pats.jpg" />
                <div class="self-stretch justify-start items-start gap-14">
                    <div class="w-7 h-5 justify-center text-xl font-medium ">1631</div>
                    <div class="w-52 h-5 text-right justify-center text-m ">Rembrandt Harmensz. van Rijn</div> <br>
                </div>
                <div class="w-64 h-5 justify-center mb-4 text-xl font-bold ">Old Man with a Gold Chain</div>
                <div class="w-64 justify-center  text-m">This evocative character study is an early example of a type of subject that preoccupied the great Dutch master Rembrandt van Rijn throughout his long career. Although his large output included landscapes, genre paintings, and the occasional still.</div>
            </div>
            <div class="inline-flex w-12 flex-col justify-start items-center gap-3.5">
                <img style="width: auto; height: 360px; border-top-left-radius: 160px; border-bottom-right-radius: 160px" src="/download" />
                <div class="self-stretch justify-start items-start gap-14">
                    <div class="w-7 h-5 justify-center text-xl font-medium ">1631</div>
                    <div class="w-52 h-5 text-right justify-center text-m ">Rembrandt Harmensz. van Rijn</div> <br>
                </div>
                <div class="w-64 h-5 justify-center mb-4 text-xl font-bold ">Old Man with a Gold Chain</div>
                <div class="w-64 justify-center text-m">This evocative character study is an early example of a type of subject that preoccupied the great Dutch master Rembrandt van Rijn throughout his long career. Although his large output included landscapes, genre paintings, and the occasional still.</div>
            </div>
        </div>
    </div>

</div>
</div>

<div class="w-full h-fit  py-16 text-center">
            <h3 class="text-black text-2xl">Events and Activites</h3>
        <h1 class="text-6xl text-primary">Show up for Education</h1>
    <div class="flex py-6 mx-32 items-center flex-wrap space-x-6 space-y-4 max-w-screen-xl">

        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="w-full h-fit justify-center items-center">
    <div class="relative space-y-4 z-10 h-full py-16 mx-32 text-white text-center font-primary">
        <h3 class="text-black text-2xl">Products for you</h3>
        <h1 class="text-6xl text-primary">Support a historical monument</h1>
        <div class="" style="transform:translateY(280px)"><button style="transform:translateX(-845px)" onclick="scrollSlider(-1)"
                class="absolute left-0 top-1/3 bg-black text-2xl text-bold text-primary p-4 rounded-full shadow-lg hover:bg-primary hover:text-white transition">
                ‹
            </button>
            <button style="transform:translateX(20px)" onclick="scrollSlider(1)"
                class="absolute right-0 top-1/3 bg-black text-2xl text-bold text-primary p-4 rounded-full shadow-lg hover:bg-primary hover:text-white transition">
                ›
            </button>
        </div>
        <div class="grid grid-cols-4 gap-16">
            @foreach($products as $product)
            <div class="bg-primary rounded-xl mt-8 overflow-hidden">
                <div class="h-96">
                    <img class="object-cover h-inherit w-inherit"
                        src="{{ isset($product->image[0]) ? Storage::disk('public')->url($product->image[0]) : asset('images/default.png') }}">
                </div>
                <div class="p-4 text-white space-y-4 pt-4">
                    <h2 class="text-3xl">{{$product->name}}</h2>
                    <h2 class="text-2xl">€{{$product->price}}</h2>
                    <a href="{{route('product', ['product' => $product])}}" class="inline-block w-full text-center text-xl border-2 border-white rounded-xl py-3 px-8 hover:bg-white hover:text-primary transition">Add to cart</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-6 gap-4">
            <div class="w-2 h-2 bg-primary rounded-full"></div>
            <div class="w-2 h-2 bg-black rounded-full"></div>
            <div class="w-2 h-2 bg-black rounded-full"></div>
            <div class="w-2 h-2 bg-black rounded-full"></div>
        </div>


    </div>
</div>
@endsection
</body>

</html>