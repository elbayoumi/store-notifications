<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <title>{{ __('الإشعارات') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

    <!-- DataTables -->
    <link href="https://juha.sa/public//assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link href="https://juha.sa/public//assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="https://juha.sa/public//assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="https://juha.sa/public//assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="https://juha.sa/public//assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="https://juha.sa/public//assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://juha.sa/public//assets/css/custom.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
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

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
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
        /* [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        } */

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

        ::-webkit-backdrop {
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

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        .messege {
            position: absolute !important;
            z-index: 10000 !important;
            left: 10% !important;
            top: 5% !important;
            width: 80% !important;
            opacity: .6 !important;
        }

        .messege:hover {
            opacity: 1 !important;

        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>

<body class="antialiased" data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div class="messege">
        @if (session('success'))
            <div class="notCompleted alert alert-success alert-dismissible fade show text-center" id="notCompleted"
                role="alert">
                {{ __(session('success')) }}
                <button id="btnNotCompleted" type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>

            </div>
        @endif
        @if (session('exception'))
            <a href="{{ route('settings') }}">
                <div class="notCompleted alert alert-warning alert-dismissible fade show text-center" id="notCompleted"
                    role="alert">
                    <strong>{{ __('اهلا بك') }}:</strong> {{ __(session('exception')) }}
                    <button id="btnNotCompleted" type="button" class="btn-close" data-dismiss="alert"
                        aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
            </a>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="notCompleted alert alert-danger alert-dismissible fade show text-center" id="notCompleted"
                    role="alert">
                    {{ __($error) }}
                    <button id="btnNotCompleted" type="button" class="btn-close" data-dismiss="alert"
                        aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
            @endforeach

        @endif
    </div>
    <div id="layout-wrapper">

        {{--
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="javascript:void(0)" class="logo logo-dark text-white">
                                <span class="logo-sm">
                                    <!-- <img src="assets/images/logo.svg" alt="" height="22"> -->
                                    Juha
                                </span>
                                <span class="logo-lg">
                                    <!-- <img src="assets/images/logo-dark.png" alt="" height="17"> -->
                                    Juha
                                </span>
                            </a>

                            <a href="javascript:void(0)" class="logo logo-light text-white">
                                <span class="logo-sm">
                                    <!-- <img src="assets/images/logo-light.svg" alt="" height="22"> -->
                                    Juha
                                </span>
                                <span class="logo-lg">
                                    <!-- <img src="assets/images/logo-light.png" alt="" height="19"> -->
                                    Juha
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar"> -->
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Super Admin</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="https://juha.sa/admin/profile"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="javascript:void(0)" id="logoutBtn"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                                <form method="POST" action="https://juha.sa/logout" id="logoutForm" style="display: none;">
                                    <input type="hidden" name="_token" value="ECJpcHVsOhQQHwHzsjSun71vQBkMCtjidinsiQCY">                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </header> --}}
        <!-- ========== Left Sidebar Start ========== -->
        {{-- <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">

                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="https://juha.sa/admin" class="waves-effect">
                                <i class="bx bxs-dashboard"></i>
                                <span key="t-chat">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-title" key="t-menu">Management</li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-user"></i>
                                <span key="t-ecommerce">Sub Admins</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/add-sub-admin" key="t-products">Add Sub-Admin</a>
                                </li>
                                <li><a href="https://juha.sa/admin/sub-admin-listing" key="t-product-detail">Listing</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bxs-business"></i>
                                <span key="t-ecommerce">Business Owners</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/bussiness-owners-requests" key="t-products">Requests
                                        Listing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-money"></i>
                                <span key="t-ecommerce">Revenue</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/revenue-transactions" key="t-products">Wallet
                                        Transactions</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="https://juha.sa/admin/Tasidata_ticet">
                                <i class="bx bxs-report"></i>
                                <span key="t-ecommerce">Tasi Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://juha.sa/admin/versions">
                                <i class="bx bxs-time"></i>
                                <span key="t-ecommerce">App Version</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-news"></i>
                                <span key="t-ecommerce">Ads</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/approved-campaigns" key="t-products">Approved
                                        Ads</a></li>
                                <li><a href="https://juha.sa/admin/pending-campaigns" key="t-product-detail">Pending
                                        Ads</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-image-alt"></i>
                                <span key="t-ecommerce">Banner Management</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/add-banner" key="t-products">Add Banner</a></li>
                                <li><a href="https://juha.sa/admin/banner-listing" key="t-product-detail">Listing</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-dollar"></i>
                                <span key="t-ecommerce">Prices Management</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/tax-management" key="t-products">Tax Management</a>
                                </li>
                                <li><a href="https://juha.sa/admin/campaign-minimum-fee" key="t-products">Campaign
                                        Minimum Fee</a>
                                </li>
                                <li><a href="https://juha.sa/admin/time-price-management" key="t-product-detail">Peak
                                        Time & Price
                                        Management</a></li>
                                <li><a href="https://juha.sa/admin/campaign-payment/create" key="t-products">Add
                                        Payment
                                        Details</a></li>
                                <li><a href="https://juha.sa/admin/campaign-payment"
                                        key="t-product-detail">Listing</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="https://juha.sa/admin/peak-hours-cost" class="waves-effect">
                                <i class="bx bx-time"></i>
                                <span key="t-ecommerce">Peak Hours CMS</span>
                            </a>
                        </li>

                        <li>
                            <a href="https://juha.sa/admin/get-users" class="waves-effect">
                                <i class="bx bx-time"></i>
                                <span key="t-ecommerce">Customers</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-globe"></i>
                                <span key="t-ecommerce">Locations</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/countries" key="t-products">Countries</a></li>
                                <li><a href="https://juha.sa/admin/cities" key="t-products">Cities</a></li>
                                <li><a href="https://juha.sa/admin/areas" key="t-products">Areas</a></li>
                                <li><a href="https://juha.sa/admin/zones" key="t-products">Zones</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-data"></i>
                                <span key="t-ecommerce">Draws</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/set/lottery" key="t-products">Set Lottery</a></li>


                                <li><a href="https://juha.sa/admin/lottery/price-money" key="t-products">Lottery Price
                                        Money</a>
                                </li>
                                <li><a href="https://juha.sa/admin/lottery/declare-winner" key="t-products">Declare
                                        Winners</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bxs-dollar-circle"></i>
                                <span key="t-ecommerce">Wallets</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/wallet-amounts" key="t-products">Wallet Amounts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bxs-shopping-bag-alt"></i>
                                <span key="t-ecommerce">CMS</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/privacy-policy" key="t-products">Privacy Policy</a>
                                </li>
                                <li><a href="https://juha.sa/admin/about-us" key="t-product-detail">About Us</a></li>
                                <li><a href="https://juha.sa/admin/update-guidelines"
                                        key="t-product-detail">Guidelines</a></li>
                                <li><a href="https://juha.sa/admin/terms-conditions" key="t-orders">Terms and
                                        Conditions</a></li>
                                <li><a href="https://juha.sa/admin/homepage-manager" key="t-orders">Homepage
                                        Manager</a></li>
                                <li><a href="https://juha.sa/admin/testimonial" key="t-orders">Testimonial</a></li>
                                <li><a href="https://juha.sa/admin/app-terms-and-conditions" key="t-orders">APP
                                        T&S</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bxs-report"></i>
                                <span key="t-ecommerce">Reports</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/user-reports" key="t-products">User Reports</a>
                                </li>
                                <li><a href="https://juha.sa/admin/user-listing" key="t-products">User Lisitng</a>
                                </li>
                                <li><a href="https://juha.sa/admin/revenue-reports" key="t-product-detail">Revenue
                                        Reports</a></li>
                                <li><a href="https://juha.sa/admin/campaign/report" key="t-orders">Campaign
                                        Reports</a></li>
                                <li><a href="https://juha.sa/admin/lottery/reports" key="t-orders">Lottery/Draw
                                        Reports</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-bell"></i>
                                <span key="t-ecommerce">Notification</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/notifications" key="t-products">Create
                                        Notification</a></li>
                                <li><a href="https://juha.sa/admin/notifications/listing"
                                        key="t-product-detail">Listing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-align-middle"></i>
                                <span key="t-ecommerce">Slots Settings</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/slots/settings">Listing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bxs-contact"></i>
                                <span key="t-ecommerce">Contact US </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="https://juha.sa/admin/contactus/listing">Listing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://juha.sa/admin/subscribers" class="waves-effect">
                                <i class="bx bx-align-middle"></i>
                                <span key="t-ecommerce">Subscribers</span>
                            </a>
                        </li>

                        <li>
                            <a href="https://juha.sa/admin/send-newsletter-email" class="waves-effect">
                                <i class="fas fa-mail-bulk"></i>
                                <span key="t-ecommerce">Send Newsletter Email</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div> --}}
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content" dir="rtl">
                <div class="container-fluid">


                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18 text-center m-auto">{{ __('الإشعارات') }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="POST" action="{{ route('notification.store') }}">
                                            @csrf

                                            {{-- `titel`, `msg` --}}
                                            <div class="row mb-2">
                                                <div class="form-group col-md-12">
                                                    <label for="titel">{{ __('عنوان الإشعار') }}</label>
                                                    <input type="text" required class="form-control"
                                                        id="titel" name="titel">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="msg">{{ __('وصف الإشعار') }}</label>
                                                    <input type="text" required class="form-control"
                                                        id="msg" name="msg">
                                                </div>
                                            </div>



                                            <button type="submit"
                                                class="btn btn-primary btn-lg w-100 mt-2 ">حفظ</button>
                                        </form>

                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderd">
                                                <tr>
                                                    <th>{{ __('عنوان الإشعار') }}</th>
                                                    <th>{{ __('وصف الإشعار') }}</th>
                                                    <td>{{ __('تاريخ الإنشاء') }}</td>
                                                </tr>
                                                @foreach ($notifications as $notification)
                                                    <tr>
                                                        <th>{{ $notification->titel }}</th>
                                                        <th>{{ $notification->msg }}</th>
                                                        <td>{{ $notification->created_at }}</td>
                                                        <td>
                                                            <input class="btn btn-success"
                                                                onclick="shoeEdit({{ $notification->id }})"
                                                                type="button" value="{{ __('تعديل') }}">

                                                        </td>
                                                        <td>
                                                            <form method="POST"
                                                                action="{{ route('notification.destroy', $notification->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input class="btn btn-danger" type="submit"
                                                                    value="{{ __('حذف') }}">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr style="display: none" id="{{ $notification->id }}">
                                                        <form method="POST"
                                                            action="{{ route('notification.update', $notification->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <td>
                                                                <input type="text" required class="form-control"
                                                                    id="titel" name="titel"
                                                                    value="{{ $notification->titel }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" required class="form-control"
                                                                    id="msg" name="msg"
                                                                    value="{{ $notification->msg }}">
                                                            </td>
                                                            <td>
                                                                <input class="btn btn-success" type="submit"
                                                                    value="{{ __('تأكيد التعديل') }}">
                                                            </td>

                                                        </form>
                                                    </tr>
                                                @endforeach

                                            </table>
                                            <div dir="ltr" class="mx-auto pb-10 w-100">
                                                {{ $notifications->links() }}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Mohamed Ashraf .
                        </div>





                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <script src="https://juha.sa/public//assets/libs/jquery/jquery.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/simplebar/simplebar.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/node-waves/waves.min.js"></script>

    <!-- Required datatable js -->
    <script src="https://juha.sa/public//assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="https://juha.sa/public//assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/jszip/jszip.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="https://juha.sa/public//assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- apexcharts -->
    <script src="https://juha.sa/public//assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- echarts js -->
    <script src="https://juha.sa/public//assets/libs/echarts/echarts.min.js"></script>
    <!-- echarts init -->
    <script src="https://juha.sa/public//assets/js/pages/echarts.init.js"></script>

    <!-- dashboard blog init -->
    <script src="https://juha.sa/public//assets/js/pages/dashboard-blog.init.js"></script>

    <!-- Responsive examples -->
    <script src="https://juha.sa/public//assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>

    <!-- Datatable init js -->
    <script src="https://juha.sa/public//assets/js/pages/datatables.init.js"></script>
    <script src="https://juha.sa/public//assets/js/ckeditor/ckeditor.js"></script>
    <script src="https://juha.sa/public//assets/js/ckeditor/samples/js/sample.js"></script>

    <!-- flot plugins -->
    <script src="https://juha.sa/public//assets/libs/flot-charts/jquery.flot.js"></script>
    <script src="https://juha.sa/public//assets/libs/flot-charts/jquery.flot.time.js"></script>
    <script src="https://juha.sa/public//assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="https://juha.sa/public//assets/libs/flot-charts/jquery.flot.resize.js"></script>
    <script src="https://juha.sa/public//assets/libs/flot-charts/jquery.flot.pie.js"></script>
    <script src="https://juha.sa/public//assets/libs/flot-charts/jquery.flot.selection.js"></script>
    <script src="https://juha.sa/public//assets/libs/flot-charts/jquery.flot.stack.js"></script>

    <script src="https://juha.sa/public//assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

    <script src="https://juha.sa/public//assets/js/pages/sweet-alerts.init.js"></script>

    <!-- flot init -->
    <script src="https://juha.sa/public//assets/js/pages/flot.init.js"></script>

    <script src="https://juha.sa/public//assets/js/app.js"></script>

    <script type="text/javascript">
        $('#logoutBtn').on('click', function() {
            $('#logoutForm').submit();
        });
    </script>
    <script src="https://juha.sa/public//tagify.min.js"></script>
    <script src="https://juha.sa/public//tagify.polyfills.min.js"></script>


    <script>
        setTimeout(function() {
            $(".alert").hide();
        }, 5000);

        function shoeEdit(prop) {
            let show = document.getElementById(prop)
            console.log(show.style.display == '')
            if (show.style.display == '') {
                show.style.display = 'none'
            } else {
                show.style.display = '';
            }
        }
        let close = document.querySelectorAll('.btn-close');
        let messege = document.querySelectorAll('.notCompleted');
        close.forEach((element, index) => {
            close[index].addEventListener('click', () => {
                messege.forEach((element) => {
                    messege[index].style.display = 'none';
                })
            });
        });
    </script>
</body>
</html>
