<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="" />

    <title>{{ env('APP_NAME') }}</title>
    <style>
        /*--------------------------------------------------------------
>> TABLE OF CONTENTS:
----------------------------------------------------------------
1. Normalize
2. Typography
3. Invoice General Style
--------------------------------------------------------------*/
        /*--------------------------------------------------------------
        2. Normalize
        ----------------------------------------------------------------*/
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap");
        *,
        ::after,
        ::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        /* Sections
           ========================================================================== */
        /**
         * Remove the margin in all browsers.
         */
        body {
            margin: 0;
        }

        /**
         * Render the `main` element consistently in IE.
         */
        main {
            display: block;
        }

        /**
         * Correct the font size and margin on `h1` elements within `section` and
         * `article` contexts in Chrome, Firefox, and Safari.
         */
        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        /* Grouping content
           ========================================================================== */
        /**
         * 1. Add the correct box sizing in Firefox.
         * 2. Show the overflow in Edge and IE.
         */
        hr {
            -webkit-box-sizing: content-box;
            box-sizing: content-box; /* 1 */
            height: 0; /* 1 */
            overflow: visible; /* 2 */
        }

        /**
         * 1. Correct the inheritance and scaling of font size in all browsers.
         * 2. Correct the odd `em` font sizing in all browsers.
         */
        pre {
            font-family: monospace, monospace; /* 1 */
            font-size: 1em; /* 2 */
        }

        /* Text-level semantics
           ========================================================================== */
        /**
         * Remove the gray background on active links in IE 10.
         */
        a {
            background-color: transparent;
        }

        /**
         * 1. Remove the bottom border in Chrome 57-
         * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
         */
        abbr[title] {
            border-bottom: none; /* 1 */
            text-decoration: underline; /* 2 */
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted; /* 2 */
        }

        /**
         * Add the correct font weight in Chrome, Edge, and Safari.
         */
        b,
        strong {
            font-weight: bolder;
        }

        /**
         * 1. Correct the inheritance and scaling of font size in all browsers.
         * 2. Correct the odd `em` font sizing in all browsers.
         */
        code,
        kbd,
        samp {
            font-family: monospace, monospace; /* 1 */
            font-size: 1em; /* 2 */
        }

        /**
         * Add the correct font size in all browsers.
         */
        small {
            font-size: 80%;
        }

        /**
         * Prevent `sub` and `sup` elements from affecting the line height in
         * all browsers.
         */
        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        /* Embedded content
           ========================================================================== */
        /**
         * Remove the border on images inside links in IE 10.
         */
        img {
            border-style: none;
        }

        /* Forms
           ========================================================================== */
        /**
         * 1. Change the font styles in all browsers.
         * 2. Remove the margin in Firefox and Safari.
         */
        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit; /* 1 */
            font-size: 100%; /* 1 */
            line-height: 1.15; /* 1 */
            margin: 0; /* 2 */
        }

        /**
         * Show the overflow in IE.
         * 1. Show the overflow in Edge.
         */
        button,
        input {
            /* 1 */
            overflow: visible;
        }

        /**
         * Remove the inheritance of text transform in Edge, Firefox, and IE.
         * 1. Remove the inheritance of text transform in Firefox.
         */
        button,
        select {
            /* 1 */
            text-transform: none;
        }

        /**
         * Correct the inability to style clickable types in iOS and Safari.
         */
        button,
        [type=button],
        [type=reset],
        [type=submit] {
            -webkit-appearance: button;
        }

        /**
         * Remove the inner border and padding in Firefox.
         */
        button::-moz-focus-inner,
        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        /**
         * Restore the focus styles unset by the previous rule.
         */
        button:-moz-focusring,
        [type=button]:-moz-focusring,
        [type=reset]:-moz-focusring,
        [type=submit]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        /**
         * Correct the padding in Firefox.
         */
        fieldset {
            padding: 0.35em 0.75em 0.625em;
        }

        /**
         * 1. Correct the text wrapping in Edge and IE.
         * 2. Correct the color inheritance from `fieldset` elements in IE.
         * 3. Remove the padding so developers are not caught out when they zero out
         *    `fieldset` elements in all browsers.
         */
        legend {
            -webkit-box-sizing: border-box;
            box-sizing: border-box; /* 1 */
            color: inherit; /* 2 */
            display: table; /* 1 */
            max-width: 100%; /* 1 */
            padding: 0; /* 3 */
            white-space: normal; /* 1 */
        }

        /**
         * Add the correct vertical alignment in Chrome, Firefox, and Opera.
         */
        progress {
            vertical-align: baseline;
        }

        /**
         * Remove the default vertical scrollbar in IE 10+.
         */
        textarea {
            overflow: auto;
        }

        /**
         * 1. Add the correct box sizing in IE 10.
         * 2. Remove the padding in IE 10.
         */
        [type=checkbox],
        [type=radio] {
            -webkit-box-sizing: border-box;
            box-sizing: border-box; /* 1 */
            padding: 0; /* 2 */
        }

        /**
         * Correct the cursor style of increment and decrement buttons in Chrome.
         */
        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto;
        }

        /**
         * 1. Correct the odd appearance in Chrome and Safari.
         * 2. Correct the outline style in Safari.
         */
        [type=search] {
            -webkit-appearance: textfield; /* 1 */
            outline-offset: -2px; /* 2 */
        }

        /**
         * Remove the inner padding in Chrome and Safari on macOS.
         */
        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /**
         * 1. Correct the inability to style clickable types in iOS and Safari.
         * 2. Change font properties to `inherit` in Safari.
         */
        ::-webkit-file-upload-button {
            -webkit-appearance: button; /* 1 */
            font: inherit; /* 2 */
        }

        /* Interactive
           ========================================================================== */
        /*
         * Add the correct display in Edge, IE 10+, and Firefox.
         */
        details {
            display: block;
        }

        .logo-width{
            width:171px;
        }
        /*
         * Add the correct display in all browsers.
         */
        summary {
            display: list-item;
        }

        /* Misc
           ========================================================================== */
        /**
         * Add the correct display in IE 10+.
         */
        template {
            display: none;
        }

        /**
         * Add the correct display in IE 10.
         */
        [hidden] {
            display: none;
        }

        /*--------------------------------------------------------------
        2. Typography
        ----------------------------------------------------------------*/
        body,
        html {
            color: #666;
            font-family: "Inter", sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.6em;
            overflow-x: hidden;
            background-color: #f5f6fa;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            clear: both;
            color: #111;
            padding: 0;
            margin: 0 0 20px 0;
            font-weight: 500;
            line-height: 1.2em;
        }

        h1 {
            font-size: 60px;
        }

        h2 {
            font-size: 48px;
        }

        h3 {
            font-size: 30px;
        }

        h4 {
            font-size: 24px;
        }

        h5 {
            font-size: 18px;
        }

        h6 {
            font-size: 16px;
        }

        p,
        div {
            margin-top: 0;
            line-height: 1.5em;
        }

        p {
            margin-bottom: 15px;
        }

        ul {
            margin: 0 0 25px 0;
            padding-left: 20px;
            list-style: disc;
        }

        ol {
            padding-left: 20px;
            margin-bottom: 25px;
        }

        dfn,
        cite,
        em,
        i {
            font-style: italic;
        }

        blockquote {
            margin: 0 15px;
            font-style: italic;
            font-size: 20px;
            line-height: 1.6em;
            margin: 0;
        }

        address {
            margin: 0 0 15px;
        }

        img {
            border: 0;
            max-width: 90%;
            height: auto;
            vertical-align: middle;
        }

        a {
            color: inherit;
            text-decoration: none;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        a:hover {
            color: #022475;
        }

        button {
            color: inherit;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        a:hover {
            text-decoration: none;
            color: inherit;
        }

        table {
            width: 100%;
            caption-side: bottom;
            border-collapse: collapse;
        }

        th {
            text-align: left;
        }

        td {
            border-top: 1px solid #dbdfea;
        }

        td {
            padding: 10px 15px;
            line-height: 1.55em;
        }

        th {
            padding: 10px 15px;
            line-height: 1.55em;
        }

        dl {
            margin-bottom: 25px;
        }
        dl dt {
            font-weight: 600;
        }

        b,
        strong {
            font-weight: bold;
        }

        pre {
            color: #666;
            border: 1px solid #dbdfea;
            font-size: 18px;
            padding: 25px;
            border-radius: 5px;
        }

        kbd {
            font-size: 100%;
            background-color: #666;
            border-radius: 5px;
        }

        a:hover {
            color: #022475;
        }

        ul {
            padding-left: 15px;
        }

        /*--------------------------------------------------------------
        3. Invoice General Style
        ----------------------------------------------------------------*/
        .tm_f10 {
            font-size: 10px;
        }

        .tm_f11 {
            font-size: 11px;
        }

        .tm_f12 {
            font-size: 12px;
        }

        .tm_f13 {
            font-size: 13px;
        }

        .tm_f14 {
            font-size: 14px;
        }

        .tm_f15 {
            font-size: 15px;
        }

        .tm_f16 {
            font-size: 16px;
        }

        .tm_f17 {
            font-size: 17px;
        }

        .tm_f18 {
            font-size: 18px;
        }

        .tm_f19 {
            font-size: 19px;
        }

        .tm_f20 {
            font-size: 20px;
        }

        .tm_f21 {
            font-size: 21px;
        }

        .tm_f22 {
            font-size: 22px;
        }

        .tm_f23 {
            font-size: 23px;
        }

        .tm_f24 {
            font-size: 24px;
        }

        .tm_f25 {
            font-size: 25px;
        }

        .tm_f26 {
            font-size: 26px;
        }

        .tm_f27 {
            font-size: 27px;
        }

        .tm_f28 {
            font-size: 28px;
        }

        .tm_f29 {
            font-size: 29px;
        }

        .tm_f30 {
            font-size: 30px;
        }

        .tm_f40 {
            font-size: 40px;
        }

        .tm_f50 {
            font-size: 50px;
        }

        .tm_light {
            font-weight: 300;
        }

        .tm_normal {
            font-weight: 400;
        }

        .tm_medium {
            font-weight: 500;
        }

        .tm_semi_bold {
            font-weight: 600;
        }

        .tm_bold {
            font-weight: 700;
        }

        .tm_m0 {
            margin: 0px;
        }

        .tm_mb0 {
            margin-bottom: 0px;
        }

        .tm_mb1 {
            margin-bottom: 1px;
        }

        .tm_mb2 {
            margin-bottom: 2px;
        }

        .tm_mb3 {
            margin-bottom: 3px;
        }

        .tm_mb4 {
            margin-bottom: 4px;
        }

        .tm_mb5 {
            margin-bottom: 5px;
        }

        .tm_mb6 {
            margin-bottom: 6px;
        }

        .tm_mb7 {
            margin-bottom: 7px;
        }

        .tm_mb8 {
            margin-bottom: 8px;
        }

        .tm_mb9 {
            margin-bottom: 9px;
        }

        .tm_mb10 {
            margin-bottom: 10px;
        }

        .tm_mb11 {
            margin-bottom: 11px;
        }

        .tm_mb12 {
            margin-bottom: 12px;
        }

        .tm_mb13 {
            margin-bottom: 13px;
        }

        .tm_mb14 {
            margin-bottom: 14px;
        }

        .tm_mb15 {
            margin-bottom: 15px;
        }

        .tm_mb16 {
            margin-bottom: 16px;
        }

        .tm_mb17 {
            margin-bottom: 17px;
        }

        .tm_mb18 {
            margin-bottom: 18px;
        }

        .tm_mb19 {
            margin-bottom: 19px;
        }

        .tm_mb20 {
            margin-bottom: 20px;
        }

        .tm_mb21 {
            margin-bottom: 21px;
        }

        .tm_mb22 {
            margin-bottom: 22px;
        }

        .tm_mb23 {
            margin-bottom: 23px;
        }

        .tm_mb24 {
            margin-bottom: 24px;
        }

        .tm_mb25 {
            margin-bottom: 25px;
        }

        .tm_mb26 {
            margin-bottom: 26px;
        }

        .tm_mb27 {
            margin-bottom: 27px;
        }

        .tm_mb28 {
            margin-bottom: 28px;
        }

        .tm_mb29 {
            margin-bottom: 29px;
        }

        .tm_mb30 {
            margin-bottom: 30px;
        }

        .tm_mb40 {
            margin-bottom: 40px;
        }

        .tm_pt25 {
            padding-top: 25px;
        }

        .tm_pt0 {
            padding-top: 0;
        }

        .tm_radius_6_0_0_6 {
            border-radius: 6px 0 0 6px;
        }

        .tm_radius_0_6_6_0 {
            border-radius: 0 6px 6px 0;
        }

        .tm_radius_0 {
            border-radius: 0 !important;
        }

        .tm_width_1 {
            width: 8.33333333%;
        }

        .tm_width_2 {
            width: 16.66666667%;
        }

        .tm_width_3 {
            width: 25%;
        }

        .tm_width_4 {
            width: 33.33333333%;
        }

        .tm_width_5 {
            width: 41.66666667%;
        }

        .tm_width_6 {
            width: 50%;
        }

        .tm_width_7 {
            width: 58.33333333%;
        }

        .tm_width_8 {
            width: 66.66666667%;
        }

        .tm_width_9 {
            width: 75%;
        }

        .tm_width_10 {
            width: 83.33333333%;
        }

        .tm_width_11 {
            width: 91.66666667%;
        }

        .tm_width_12 {
            width: 100%;
        }

        .tm_border {
            border: 1px solid #e4d8ff;
        }

        .tm_border_bottom {
            border-bottom: 1px solid #dbdfea;
        }

        .tm_border_top {
            border-top: 1px solid #dbdfea;
        }

        .tm_border_left {
            border-left: 1px solid #dbdfea;
        }

        .tm_border_right {
            border-right: 1px solid #dbdfea;
        }

        .tm_round_border {
            border: 1px solid #dbdfea;
            overflow: hidden;
            border-radius: 6px;
        }

        .tm_accent_color,
        .tm_accent_color_hover:hover {
            color: #022475;
        }

        .tm_accent_bg,
        .tm_accent_bg_hover:hover {
            background-color: #022475;
        }

        .tm_accent_bg_10 {
            background-color: rgb(248, 248, 248);
        }

        .tm_accent_bg_20 {
            background-color: rgba(0, 122, 255, 0.15);
        }

        .tm_green_bg {
            background-color: #34c759;
        }

        .tm_green_bg_15 {
            background-color: rgba(52, 199, 89, 0.1);
        }

        .tm_primary_bg,
        .tm_primary_bg_hover:hover {
            background-color: #111;
        }

        .tm_primary_bg_2 {
            background-color: #000036;
        }

        .tm_danger_color {
            color: red;
        }

        .tm_primary_color {
            color: #111;
        }

        .tm_secondary_color {
            color: #666;
        }

        .tm_ternary_color {
            color: #b5b5b5;
        }

        .tm_white_color {
            color: #fff;
        }

        .tm_white_color_60 {
            color: rgba(255, 255, 255, 0.6);
        }

        .tm_gray_bg {
            background: #f5f6fa;
        }

        .tm_ternary_bg {
            background-color: #b5b5b5;
        }

        .tm_accent_10_bg {
            background-color: rgb(242 238 251);
        }

        .tm_accent_border {
            border-color: #022475;
        }

        .tm_accent_border_10 {
            border-color: rgb(242 238 251);
        }

        .tm_accent_border_20 {
            border-color: #e4d8ff;
        }

        .tm_accent_border_30 {
            border-color: rgba(0, 122, 255, 0.3);
        }

        .tm_accent_border_40 {
            border-color: rgba(0, 122, 255, 0.4);
        }

        .tm_accent_border_50 {
            border-color: rgba(0, 122, 255, 0.5);
        }

        .tm_primary_border {
            border-color: #111;
        }

        .tm_gray_border {
            border-color: #f5f6fa;
        }

        .tm_primary_border_2 {
            border-color: #000036;
        }

        .tm_secondary_border {
            border-color: #666;
        }

        .tm_ternary_border {
            border-color: #b5b5b5;
        }

        .tm_border_color {
            border-color: #dbdfea;
        }

        .tm_border_1 {
            border-style: solid;
            border-width: 1px;
        }

        .tm_body_lineheight {
            line-height: 1.5em;
        }

        .tm_invoice_in {
            position: relative;
            z-index: 100;
        }

        .tm_container {
            max-width: 880px;
            padding: 30px 15px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }

        .tm_text_center {
            text-align: center;
        }

        .tm_text_uppercase {
            text-transform: uppercase;
        }

        .tm_text_right {
            text-align: right;
        }

        .tm_align_center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .tm_border_bottom_0 {
            border-bottom: 0;
        }

        .tm_border_top_0 {
            border-top: 0;
        }

        .tm_table_baseline {
            vertical-align: baseline;
        }

        .tm_border_none {
            border: none !important;
        }

        .tm_flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .tm_justify_between {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .tm__align_center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .tm_border_left_none {
            border-left-width: 0;
        }

        .tm_border_right_none {
            border-right-width: 0;
        }

        .tm_table_responsive {
            overflow-x: auto;
        }
        .tm_table_responsive > table {
            min-width: 600px;
        }

        .tm_50_col > * {
            width: 50%;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }

        .tm_no_border {
            border: none !important;
        }

        .tm_grid_row {
            display: grid;
            grid-gap: 10px 20px;
            list-style: none;
            padding: 0;
        }

        .tm_col_2 {
            grid-template-columns: repeat(2, 1fr);
        }

        .tm_col_3 {
            grid-template-columns: repeat(3, 1fr);
        }

        .tm_col_4 {
            grid-template-columns: repeat(4, 1fr);
        }

        .tm_max_w_150 {
            max-width: 150px;
        }

        .tm_left_auto {
            margin-left: auto;
        }

        hr {
            background: #dbdfea;
            height: 1px;
            border: none;
            margin: 0;
        }

        .tm_invoice {
            background: #fff;
            border-radius: 10px;
            padding: 50px;
        }

        .tm_invoice_footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice_footer table {
            margin-top: -1px;
        }
        .tm_invoice_footer .tm_left_footer {
            width: 58%;
            padding: 10px 15px;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice_footer .tm_right_footer {
            width: 42%;
        }

        .tm_note {
            margin-top: 30px;
            font-style: italic;
        }

        .tm_font_style_normal {
            font-style: normal;
        }

        .tm_sign img {
            max-height: 45px;
        }

        .tm_coffee_shop_img {
            position: absolute;
            height: 200px;
            opacity: 0.04;
            top: 40px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        .tm_coffee_shop_img img {
            max-height: 100%;
        }

        .tm_invoice.tm_style1 .tm_invoice_right {
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
            width: 60%;
        }
        .tm_invoice.tm_style1 .tm_invoice_table {
            grid-gap: 1px;
        }
        .tm_invoice.tm_style1 .tm_invoice_table > * {
            border: 1px solid #dbdfea;
            margin: -1px;
            padding: 8px 15px 10px;
        }
        .tm_invoice.tm_style1 .tm_invoice_head {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_right div {
            line-height: 1em;
        }
        .tm_invoice.tm_style1 .tm_invoice_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        .tm_invoice.tm_style1 .tm_invoice_info_2 {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            border-top: 1px solid #dbdfea;
            border-bottom: 1px solid #dbdfea;
            padding: 11px 0;
        }
        .tm_invoice.tm_style1 .tm_invoice_seperator {
            min-height: 18px;
            border-radius: 1.6em;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            margin-right: 20px;
        }
        .tm_invoice.tm_style1 .tm_invoice_info_list {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice.tm_style1 .tm_invoice_info_list > *:not(:last-child) {
            margin-right: 20px;
        }
        .tm_invoice.tm_style1 .tm_logo img {
            max-height: 50px;
        }
        .tm_invoice.tm_style1 .tm_logo.tm_size1 img {
            max-height: 60px;
        }
        .tm_invoice.tm_style1 .tm_logo.tm_size2 img {
            max-height: 70px;
        }
        .tm_invoice.tm_style1 .tm_grand_total {
            padding: 8px 15px;
        }
        .tm_invoice.tm_style1 .tm_box_3 {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice.tm_style1 .tm_box_3 > * {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul li:not(:last-child) {
            margin-bottom: 5px;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul span {
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul span:first-child {
            margin-right: 5px;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul span:last-child {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .tm_invoice.tm_style2 .tm_invoice_head {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-bottom: 1px solid #dbdfea;
            padding-bottom: 15px;
            position: relative;
        }
        .tm_invoice.tm_style2 .tm_invoice_left {
            width: 27%;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice.tm_style2 .tm_invoice_right {
            width: 35%;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice.tm_style2 .tm_invoice_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice.tm_style2 .tm_invoice_info_left {
            width: 30%;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice.tm_style2 .tm_invoice_info_right {
            width: 70%;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice.tm_style2 .tm_logo img {
            max-height: 60px;
        }
        .tm_invoice.tm_style2 .tm_invoice_title {
            line-height: 0.8em;
        }
        .tm_invoice.tm_style2 .tm_invoice_info_in {
            padding: 12px 20px;
            border-radius: 10px;
        }
        .tm_invoice.tm_style2 .tm_card_note {
            display: inline-block;
            padding: 6px 15px;
            border-radius: 6px;
            margin-bottom: 10px;
            margin-top: 5px;
        }
        .tm_invoice.tm_style2 .tm_invoice_footer .tm_left_footer {
            padding-left: 0;
        }

        .tm_invoice.tm_style1.tm_type1 {
            padding: 0px 50px 30px;
            position: relative;
            overflow: hidden;
            border-radius: 0;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_head {
            height: 110px;
            position: relative;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_shape_bg {
            position: absolute;
            height: 100%;
            width: 70%;
            -webkit-transform: skewX(35deg);
            transform: skewX(35deg);
            top: 0px;
            right: -100px;
            overflow: hidden;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_shape_bg img {
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -webkit-transform: skewX(-35deg) translateX(-45px);
            transform: skewX(-35deg) translateX(-45px);
        }
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_right {
            position: relative;
            z-index: 2;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_logo img {
            max-height: 70px;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
            margin-right: 0;
            border-radius: 0;
            -webkit-transform: skewX(35deg);
            transform: skewX(35deg);
            position: absolute;
            height: 100%;
            width: 57.5%;
            right: -60px;
            overflow: hidden;
            border: none;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator img {
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -webkit-transform: skewX(-35deg);
            transform: skewX(-35deg);
            -webkit-transform: skewX(-35deg) translateX(-10px);
            transform: skewX(-35deg) translateX(-10px);
        }
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_info {
            position: relative;
            padding: 4px 0;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_card_note,
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_info_list {
            position: relative;
            z-index: 1;
        }

        .tm_invoice.tm_style3 {
            padding: 0;
        }
        .tm_invoice.tm_style3 .tm_invoice_head {
            padding: 60px 50px;
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            border-radius: 10px 10px 0 0;
        }
        .tm_invoice.tm_style3 .tm_head_address {
            border-left: 2px solid;
            padding: 0px 0 0px 15px;
        }
        .tm_invoice.tm_style3 .tm_invoice_left,
        .tm_invoice.tm_style3 .tm_invoice_right {
            position: relative;
            z-index: 1;
        }
        .tm_invoice.tm_style3 .tm_watermark_title {
            position: absolute;
            left: 0;
            top: 0;
            line-height: 1em;
            font-size: 165px;
            font-weight: bold;
            padding: 20px 30px 20px 30px;
            letter-spacing: 18px;
            opacity: 0.08;
        }
        .tm_invoice.tm_style3 .tm_invoice_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            padding: 0 50px;
            margin-top: -25px;
            padding-bottom: 40px;
        }
        .tm_invoice.tm_style3 .tm_invoice_info_left {
            padding: 20px 30px;
            position: relative;
            z-index: 2;
        }
        .tm_invoice.tm_style3 .tm_invoice_details {
            padding: 0 50px 50px 50px;
        }
        .tm_invoice.tm_style3 .tm_table.tm_style1 th {
            border-color: rgba(255, 255, 255, 0.231372549);
        }
        .tm_invoice.tm_style3 .tm_invoice_footer .tm_left_footer {
            padding: 20px 15px;
        }

        @media (min-width: 500px) {
            .tm_invoice.tm_style1.tm_type2 {
                position: relative;
                overflow: hidden;
                border-radius: 0;
            }
            .tm_invoice.tm_style1.tm_type2 td {
                padding-top: 12px;
                padding-bottom: 12px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_pt0 {
                padding-top: 0;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_bars {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: absolute;
                top: 0px;
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
                overflow: hidden;
                padding: 0 15px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_bars span {
                height: 100px;
                width: 5px;
                display: block;
                margin: -15px 20px 0;
                -webkit-transform: rotate(-40deg);
                transform: rotate(-40deg);
            }
            .tm_invoice.tm_style1.tm_type2 .tm_bars.tm_type1 {
                top: initial;
                bottom: 0;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_bars.tm_type1 span {
                margin: 0 20px 0;
                position: relative;
                bottom: -15px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape {
                height: 230px;
                width: 250px;
                position: absolute;
                top: 0;
                right: 0;
                overflow: hidden;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape .tm_shape_in {
                position: absolute;
                height: 350px;
                width: 350px;
                -webkit-transform: rotate(40deg);
                transform: rotate(40deg);
                top: -199px;
                left: 67px;
                overflow: hidden;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape.tm_type1 {
                top: initial;
                bottom: 0;
                right: initial;
                left: 0;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape.tm_type1 .tm_shape_in {
                top: 135px;
                left: -153px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_2 {
                height: 120px;
                width: 120px;
                border: 5px solid currentColor;
                padding: 20px;
                position: absolute;
                bottom: -30px;
                right: 77px;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_2 .tm_shape_2_in {
                height: 100%;
                width: 100%;
                border: 20px solid currentColor;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_2.tm_type1 {
                left: -76px;
                right: initial;
                bottom: 245px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_2.tm_type1 .tm_shape_2_in {
                border-width: 6px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_invoice_right {
                width: 40%;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_logo img {
                max-height: 65px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_invoice_footer {
                margin-bottom: 120px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_right_footer {
                position: relative;
                padding: 6px 0;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_right_footer table {
                position: relative;
                z-index: 2;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_left_footer {
                padding: 30px 15px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_3 {
                position: absolute;
                top: 0;
                left: -40px;
                height: 100%;
                width: calc(100% + 150px);
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_4 {
                position: absolute;
                bottom: 200px;
                left: 0;
                height: 200px;
                width: 200px;
            }
        }
        .tm_invoice.tm_style1.tm_type3 {
            position: relative;
            overflow: hidden;
            border-radius: 0;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_shape_1 {
            position: absolute;
            top: -1px;
            left: 0;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_shape_2 {
            position: absolute;
            bottom: 0;
            left: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_logo img {
            max-height: 60px;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_invoice_head.tm_mb20 {
            margin-bottom: 65px;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_invoice_info_list {
            position: relative;
            padding: 10px 0 10px 40px;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_invoice_info_list_bg {
            position: absolute;
            height: 100%;
            width: calc(100% + 100px);
            top: 0;
            left: 0;
            border-radius: 20px 0 0 0px;
            -webkit-transform: skewX(-35deg);
            transform: skewX(-35deg);
        }

        .tm_invoice.tm_style2.tm_type1 {
            padding-top: 0;
            padding-bottom: 0;
            border-width: 40px 0 0;
            border-style: solid;
            position: relative;
            overflow: hidden;
        }
        .tm_invoice.tm_style2.tm_type1.tm_small_border {
            border-width: 7px 0 0;
        }
        .tm_invoice.tm_style2.tm_type1 .tm_shape_bg {
            position: absolute;
            height: 100%;
            width: 37%;
            -webkit-transform: skewX(-35deg);
            transform: skewX(-35deg);
            top: 0px;
            left: -100px;
        }
        .tm_invoice.tm_style2.tm_type1 .tm_invoice_head {
            padding-top: 15px;
            border-bottom: none;
        }
        .tm_invoice.tm_style2.tm_type1 .tm_logo {
            position: relative;
            z-index: 2;
        }
        .tm_invoice.tm_style2.tm_type1 .tm_bottom_invoice {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding: 15px 50px 20px;
            border-top: 1px solid #dbdfea;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 30px -50px 0;
        }

        .tm_invoice_content {
            position: relative;
            z-index: 10;
        }

        .tm_invoice_wrap {
            position: relative;
        }

        .tm_note_list li:not(:last-child) {
            margin-bottom: 5px;
        }

        .tm_list.tm_style1 {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .tm_list.tm_style1 svg {
            width: 16px;
            height: initial;
        }
        .tm_list.tm_style1 .tm_list_icon {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            left: 0;
            top: 3px;
        }
        .tm_list.tm_style1 li {
            padding-left: 25px;
            position: relative;
        }
        .tm_list.tm_style1 li:not(:last-child) {
            margin-bottom: 5px;
        }
        .tm_list.tm_style1.tm_text_right li {
            padding-left: 0;
            padding-right: 25px;
        }
        .tm_list.tm_style1.tm_text_right .tm_list_icon {
            left: initial;
            right: 0;
        }

        .tm_section_heading {
            border-width: 0 0 1px 0;
            border-style: solid;
        }
        .tm_section_heading > span {
            display: inline-block;
            padding: 8px 15px;
            border-radius: 7px 7px 0 0;
        }
        .tm_section_heading .tm_curve_35 {
            margin-left: 12px;
            margin-right: 0;
        }
        .tm_section_heading .tm_curve_35 span {
            display: inline-block;
        }

        .tm_padd_15_20 {
            padding: 15px 20px;
        }

        .tm_padd_8_20 {
            padding: 8px 20px;
        }

        .tm_padd_20 {
            padding: 20px;
        }

        .tm_padd_15 {
            padding: 15px;
        }

        .tm_padd_10 {
            padding: 10px;
        }

        .tm_padd_5 {
            padding: 5px;
        }

        .tm_curve_35 {
            -webkit-transform: skewX(-35deg);
            transform: skewX(-35deg);
            padding: 12px 20px 12px 30px;
            margin-left: 22px;
            margin-right: 22px;
        }
        .tm_curve_35 > * {
            -webkit-transform: skewX(35deg);
            transform: skewX(35deg);
        }

        .tm_dark_invoice_body {
            background-color: #18191a;
        }

        .tm_dark_invoice {
            background: #252526;
            color: rgba(255, 255, 255, 0.65);
        }
        .tm_dark_invoice .tm_primary_color {
            color: rgba(255, 255, 255, 0.9);
        }
        .tm_dark_invoice .tm_secondary_color {
            color: rgba(255, 255, 255, 0.65);
        }
        .tm_dark_invoice .tm_ternary_color {
            color: rgba(255, 255, 255, 0.4);
        }
        .tm_dark_invoice .tm_gray_bg {
            background: rgba(255, 255, 255, 0.08);
        }
        .tm_dark_invoice .tm_border_color,
        .tm_dark_invoice .tm_round_border,
        .tm_dark_invoice td,
        .tm_dark_invoice th,
        .tm_dark_invoice .tm_border_top,
        .tm_dark_invoice .tm_border_bottom {
            border-color: rgba(255, 255, 255, 0.1);
        }
        .tm_dark_invoice + .tm_invoice_btns {
            background: #252526;
            border-color: #252526;
        }

        @media (min-width: 1000px) {
            .tm_invoice_btns {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-top: 0px;
                margin-left: 20px;
                position: absolute;
                left: 100%;
                top: 0;
                -webkit-box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                border: 3px solid #fff;
                border-radius: 6px;
                background-color: #fff;
            }
            .tm_invoice_btn {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                border: none;
                font-weight: 600;
                cursor: pointer;
                padding: 0;
                background-color: transparent;
                position: relative;
            }
            .tm_invoice_btn svg {
                width: 24px;
            }
            .tm_invoice_btn .tm_btn_icon {
                padding: 0;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                height: 42px;
                width: 42px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
            .tm_invoice_btn .tm_btn_text {
                position: absolute;
                left: 100%;
                background-color: #111;
                color: #fff;
                padding: 3px 12px;
                display: inline-block;
                margin-left: 10px;
                border-radius: 5px;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                font-weight: 500;
                min-height: 28px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                opacity: 0;
                visibility: hidden;
            }
            .tm_invoice_btn .tm_btn_text:before {
                content: "";
                height: 10px;
                width: 10px;
                position: absolute;
                background-color: #111;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                left: -3px;
                top: 50%;
                margin-top: -6px;
                border-radius: 2px;
            }
            .tm_invoice_btn:hover .tm_btn_text {
                opacity: 1;
                visibility: visible;
            }
            .tm_invoice_btn:not(:last-child) {
                margin-bottom: 3px;
            }
            .tm_invoice_btn.tm_color1 {
                background-color: rgb(242 238 251);
                color: #022475;
                border-radius: 5px 5px 0 0;
            }
            .tm_invoice_btn.tm_color1:hover {
                background-color: rgba(0, 122, 255, 0.2);
            }
            .tm_invoice_btn.tm_color2 {
                background-color: rgba(52, 199, 89, 0.1);
                color: #34c759;
                border-radius: 0 0 5px 5px;
            }
            .tm_invoice_btn.tm_color2:hover {
                background-color: rgba(52, 199, 89, 0.2);
            }
        }
        @media (max-width: 999px) {
            .tm_invoice_btns {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-top: 0px;
                margin-top: 20px;
                -webkit-box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                border: 3px solid #fff;
                border-radius: 6px;
                background-color: #fff;
                position: relative;
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
            }
            .tm_invoice_btn {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                border: none;
                font-weight: 600;
                cursor: pointer;
                padding: 0;
                background-color: transparent;
                position: relative;
                border-radius: 5px;
                padding: 6px 15px;
            }
            .tm_invoice_btn svg {
                width: 24px;
            }
            .tm_invoice_btn .tm_btn_icon {
                padding: 0;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-right: 8px;
            }
            .tm_invoice_btn:not(:last-child) {
                margin-right: 3px;
            }
            .tm_invoice_btn.tm_color1 {
                background-color: rgb(242 238 251);
                color: #022475;
            }
            .tm_invoice_btn.tm_color1:hover {
                background-color: rgba(0, 122, 255, 0.2);
            }
            .tm_invoice_btn.tm_color2 {
                background-color: rgba(52, 199, 89, 0.1);
                color: #34c759;
            }
            .tm_invoice_btn.tm_color2:hover {
                background-color: rgba(52, 199, 89, 0.2);
            }
        }
        @media (max-width: 767px) {
            .tm_col_4 {
                grid-template-columns: repeat(1, 1fr);
            }
            .tm_col_2_md {
                grid-template-columns: repeat(2, 1fr);
            }
            .tm_m0_md {
                margin: 0;
            }
            .tm_mb10_md {
                margin-bottom: 10px;
            }
            .tm_mb15_md {
                margin-bottom: 15px;
            }
            .tm_mb20_md {
                margin-bottom: 20px;
            }
            .tm_mobile_hide {
                display: none;
            }
            .tm_invoice {
                padding: 30px 20px;
            }
            .tm_invoice .tm_right_footer {
                width: 100%;
            }
            .tm_invoice_footer {
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
            }
            .tm_invoice_footer .tm_left_footer {
                width: 100%;
                border-top: 1px solid #dbdfea;
                margin-top: -1px;
                padding: 15px 0;
            }
            .tm_invoice.tm_style2 .tm_card_note {
                margin-top: 0;
            }
            .tm_note.tm_text_center {
                text-align: left;
            }
            .tm_note.tm_text_center p br {
                display: none;
            }
            .tm_invoice_footer.tm_type1 {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style2 .tm_invoice_head {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style2 .tm_invoice_head > * {
                width: 100%;
            }
            .tm_invoice.tm_style2 .tm_invoice_head .tm_invoice_left {
                margin-bottom: 15px;
            }
            .tm_invoice.tm_style2 .tm_invoice_head .tm_text_right {
                text-align: left;
            }
            .tm_invoice.tm_style2 .tm_invoice_info {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style2 .tm_invoice_info > * {
                width: 100%;
            }
            .tm_invoice.tm_style1.tm_type1 {
                padding: 30px 20px;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_head {
                height: initial;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_info {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                padding-left: 15px;
                padding-right: 15px;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
                width: 100%;
                -webkit-transform: initial;
                transform: initial;
                right: 0;
                top: 0;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_logo img {
                max-height: 60px;
            }
            .tm_invoice.tm_style2.tm_type1 {
                border-width: 20px 0 0;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_shape_bg {
                width: 250px;
                height: 80px;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_invoice_head .tm_text_center {
                text-align: left;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_logo {
                top: 12px;
                margin-bottom: 35px;
            }
            img{
                max-width:80%;
            }
            .tm_invoice.tm_style2 .tm_invoice_info_in {
                padding: 12px 15px;
            }
            .tm_border_none_md {
                border: none !important;
            }
            .tm_border_left_none_md {
                border-left-width: 0;
            }
            .tm_border_right_none_md {
                border-right-width: 0;
            }
            .tm_padd_left_15_md {
                padding-left: 15px !important;
            }
            .tm_invoice.tm_style2 .tm_logo img {
                max-height: 50px;
            }
            .tm_curve_35 {
                -webkit-transform: skewX(0deg);
                transform: skewX(0deg);
                margin-left: 0;
                margin-right: 0;
            }
            .tm_curve_35 > * {
                -webkit-transform: inherit;
                transform: inherit;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator,
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator img {
                -webkit-transform: initial;
                transform: initial;
            }
            .tm_section_heading .tm_curve_35 {
                margin-left: 0;
            }
            .tm_shape_2.tm_type1 {
                display: none;
            }
            .tm_invoice.tm_style3 .tm_invoice_info {
                padding: 0px 20px 40px;
            }
            .tm_invoice.tm_style3 .tm_invoice_details {
                padding: 0px 20px 50px;
            }
            .tm_invoice.tm_style3 .tm_invoice_head {
                padding: 60px 20px;
            }
            .tm_invoice.tm_style3 .tm_watermark_title {
                letter-spacing: 5px;
                font-size: 20vw;
                padding: 27px 20px;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                line-height: 1em;
            }
        }
        @media (max-width: 500px) {
            .tm_border_none_sm {
                border: none !important;
            }
            .tm_flex_column_sm {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_align_start_sm {
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
            }
            .tm_m0_sm {
                margin-bottom: 0;
            }
            .tm_invoice.tm_style1 .tm_logo {
                margin-bottom: 10px;
            }
            .tm_invoice.tm_style1 .tm_invoice_head {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_left,
            .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_right {
                width: 100%;
            }
            .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_right {
                text-align: left;
            }
            .tm_list.tm_style2 li {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_list.tm_style2 li > * {
                padding: 5px 20px;
            }
            .tm_col_2,
            .tm_col_3 {
                grid-template-columns: repeat(1, 1fr);
            }
            .tm_col_2_sm {
                grid-template-columns: repeat(2, 1fr);
            }
            .tm_table.tm_style1.tm_type1 {
                padding: 0px 20px;
            }
            .tm_box2_wrap {
                grid-template-columns: repeat(1, 1fr);
            }
            .tm_box.tm_style1.tm_type1 {
                max-width: 100%;
                width: 100%;
            }
            .tm_invoice.tm_style1 .tm_invoice_left {
                max-width: 100%;
            }
            .tm_f50 {
                font-size: 30px;
            }
            .tm_invoice.tm_style1 .tm_invoice_info {
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
            }
            .tm_invoice.tm_style1 .tm_invoice_seperator {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 100%;
                margin-right: 0;
                min-height: 5px;
            }
            .tm_invoice.tm_style1 .tm_invoice_info_list {
                width: 100%;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
            .tm_invoice.tm_style1 .tm_invoice_seperator + .tm_invoice_info_list {
                margin-bottom: 5px;
            }
            .tm_f30 {
                font-size: 22px;
            }
            .tm_invoice.tm_style1 .tm_box_3 {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style1 .tm_box_3 span br {
                display: none;
            }
            .tm_invoice.tm_style1 .tm_box_3 > *:not(:last-child) {
                margin-bottom: 15px;
            }
            .tm_invoice.tm_style1 .tm_box_3 ul li {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style1 .tm_box_3 ul li:not(:last-child) {
                margin-bottom: 5px;
            }
            .tm_invoice.tm_style3 .tm_watermark_title {
                font-size: 18.4vw;
                padding: 10px 15px;
                top: 0;
                -webkit-transform: initial;
                transform: initial;
                line-height: 1em;
            }
            .tm_invoice.tm_style3 .tm_invoice_head,
            .tm_invoice.tm_style3 .tm_invoice_info {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
            }
            .tm_invoice.tm_style3 .tm_invoice_right {
                margin-top: 30px;
            }
            .tm_invoice.tm_style3 .tm_text_right {
                text-align: left;
            }
            .tm_invoice.tm_style3 .tm_invoice_info_right {
                margin-top: 20px;
            }
            .tm_invoice.tm_style3 .tm_table.tm_style1 {
                margin-bottom: 10px;
            }
        }
        /*--------------------------------------------------------------
          Will apply only print window
        ----------------------------------------------------------------*/
        @media print {
            .tm_gray_bg {
                background-color: #f5f6fa !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_ternary_bg {
                background-color: #b5b5b5 !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_primary_bg {
                background-color: #111 !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_secondary_bg {
                background-color: #666 !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_accent_bg {
                background-color: #022475;
                -webkit-print-color-adjust: exact;
            }
            .tm_accent_bg_10 {
                background-color: rgb(248, 248, 248) !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_accent_bg_20 {
                background-color: rgba(0, 122, 255, 0.15) !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_white_color {
                color: #fff !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_accent_color {
                color: #022475 !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_ternary_color {
                color: #b5b5b5 !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_hide_print {
                display: none !important;
            }
            .tm_dark_invoice .tm_gray_bg {
                background-color: #111 !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_dark_invoice {
                background: #111 !important;
                color: rgba(255, 255, 255, 0.65) !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_dark_invoice .tm_gray_bg {
                background: rgba(255, 255, 255, 0.05) !important;
                -webkit-print-color-adjust: exact;
            }
            hr {
                background: #dbdfea !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_col_4,
            .tm_col_4.tm_col_2_md {
                grid-template-columns: repeat(4, 1fr);
            }
            .tm_col_2_md {
                grid-template-columns: repeat(2, 1fr);
            }
            .tm_mb1 {
                margin-bottom: 1px;
            }
            .tm_mb2 {
                margin-bottom: 2px;
            }
            .tm_mb3 {
                margin-bottom: 3px;
            }
            .tm_mb4 {
                margin-bottom: 4px;
            }
            .tm_mb5 {
                margin-bottom: 5px;
            }
            .tm_mb6 {
                margin-bottom: 6px;
            }
            .tm_mb7 {
                margin-bottom: 7px;
            }
            .tm_mb8 {
                margin-bottom: 8px;
            }
            .tm_mb9 {
                margin-bottom: 9px;
            }
            .tm_mb10 {
                margin-bottom: 10px;
            }
            .tm_mb11 {
                margin-bottom: 11px;
            }
            .tm_mb12 {
                margin-bottom: 12px;
            }
            .tm_mb13 {
                margin-bottom: 13px;
            }
            .tm_mb14 {
                margin-bottom: 14px;
            }
            .tm_mb15 {
                margin-bottom: 15px;
            }
            .tm_mb16 {
                margin-bottom: 16px;
            }
            .tm_mb17 {
                margin-bottom: 17px;
            }
            .tm_mb18 {
                margin-bottom: 18px;
            }
            .tm_mb19 {
                margin-bottom: 19px;
            }
            .tm_mb20 {
                margin-bottom: 20px;
            }
            .tm_mb21 {
                margin-bottom: 21px;
            }
            .tm_mb22 {
                margin-bottom: 22px;
            }
            .tm_mb23 {
                margin-bottom: 23px;
            }
            .tm_mb24 {
                margin-bottom: 24px;
            }
            .tm_mb25 {
                margin-bottom: 25px;
            }
            .tm_mb26 {
                margin-bottom: 26px;
            }
            .tm_mb27 {
                margin-bottom: 27px;
            }
            .tm_mb28 {
                margin-bottom: 28px;
            }
            .tm_mb29 {
                margin-bottom: 29px;
            }
            .tm_mb30 {
                margin-bottom: 30px;
            }
            .tm_mb40 {
                margin-bottom: 40px;
            }
            .tm_mobile_hide {
                display: block;
            }
            .tm_invoice {
                padding: 10px;
            }
            .tm_invoice .tm_right_footer {
                width: 42%;
            }
            .tm_invoice_footer {
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                flex-direction: initial;
            }
            .tm_invoice_footer .tm_left_footer {
                width: 58%;
                padding: 10px 15px;
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                border-top: none;
                margin-top: 0px;
            }
            .tm_invoice.tm_style2 .tm_card_note {
                margin-top: 5px;
            }
            .tm_note.tm_text_center {
                text-align: center;
            }
            .tm_note.tm_text_center p br {
                display: initial;
            }
            .tm_invoice_footer.tm_type1 {
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                flex-direction: initial;
            }
            .tm_invoice.tm_style2 .tm_invoice_head {
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                flex-direction: initial;
            }
            .tm_invoice.tm_style2 .tm_invoice_head > .tm_invoice_left {
                width: 30%;
            }
            .tm_invoice.tm_style2 .tm_invoice_head > .tm_invoice_right {
                width: 70%;
            }
            .tm_invoice.tm_style2 .tm_invoice_head .tm_invoice_left {
                margin-bottom: initial;
            }
            .tm_invoice.tm_style2 .tm_invoice_head .tm_text_right {
                text-align: right;
            }
            .tm_invoice.tm_style2 .tm_invoice_info {
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                flex-direction: initial;
            }
            .tm_invoice.tm_style2 .tm_invoice_info > .tm_invoice_info_left {
                width: 30%;
            }
            .tm_invoice.tm_style2 .tm_invoice_info > .tm_invoice_info_right {
                width: 70%;
            }
            .tm_invoice.tm_style1.tm_type1 {
                padding: 0px 20px 30px;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_head {
                height: 110px;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_info {
                padding: 4px 0;
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                flex-direction: initial;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
                top: initial;
                margin-right: 0;
                border-radius: 0;
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
                position: absolute;
                height: 100%;
                width: 57.5%;
                right: -60px;
                overflow: hidden;
                border: none;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_logo img {
                max-height: 70px;
            }
            .tm_invoice.tm_style2.tm_type1 {
                border-width: 20px 0 0;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_shape_bg {
                height: 100%;
                width: 42%;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_invoice_head .tm_text_center {
                text-align: center;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_logo {
                top: initial;
                margin-bottom: initial;
            }
            .tm_invoice.tm_style2 .tm_invoice_info_in {
                padding: 12px 20px;
            }
            .tm_invoice.tm_style2 .tm_logo img {
                max-height: 60px;
            }
            .tm_curve_35 {
                -webkit-transform: skewX(-35deg);
                transform: skewX(-35deg);
                margin-left: 22px;
                margin-right: 22px;
            }
            .tm_curve_35 > * {
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator img {
                -webkit-transform: skewX(-35deg) translateX(-45px);
                transform: skewX(-35deg) translateX(-45px);
            }
            .tm_section_heading .tm_curve_35 {
                margin-left: 12px;
            }
            .tm_round_border {
                border-top-width: 2px;
            }
            .tm_border_left_none_md {
                border-left-width: 1px;
            }
            .tm_border_right_none_md {
                border-right-width: 1px;
            }
            .tm_note {
                margin-top: 30px;
            }
            .tm_pagebreak {
                page-break-before: always;
            }
            .tm_invoice.tm_style3 {
                padding: 0;
            }
            .tm_invoice.tm_style3 .tm_invoice_info {
                padding: 0px 15px 40px;
            }
            .tm_invoice.tm_style3 .tm_invoice_details {
                padding: 0px 15px 50px;
            }
            .tm_invoice.tm_style3 .tm_invoice_head {
                padding: 60px 15px;
            }
            .tm_invoice.tm_style3 .tm_watermark_title {
                letter-spacing: 5px;
                font-size: 150px;
                padding: 27px 15px 27px 15px;
            }
        }/*# sourceMappingURL=style.css.map */
        .cust_authorized{
            display: flex;
            align-items: center;
            justify-content: end;
        }

    </style>
</head>

<body>
<div class="tm_container">
    <div class="tm_invoice_wrap">
        <div class="tm_invoice tm_style2 tm_type1 tm_accent_border tm_radius_0 tm_small_border" id="tm_download_section">
            <div class="tm_invoice_in">
                <div class="tm_invoice_head tm_mb20 tm_m0_md">
                    <div class="tm_invoice_left">
                        <div class="tm_logo logo-width"><img src="data:image/png;base64,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" width="150" alt="Logo" /></div>
                    </div>
                    <div class="tm_invoice_right" style="width:70%;margin-left:10px;">
                        <div class="tm_grid_row tm_col_12">
                            <div class="tm_f14">
                                <b>{{ config('constant.COMPANY_NAME'); }}</b><br />
                                {{ config('constant.COMPANY_ADDRESS'); }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tm_invoice_info tm_mb30 tm_align_center">
                    <div class="tm_invoice_left" style="width:30%;">
                        <div class="tm_f14">
                            <p class="tm_mb0">
                                <b class="tm_primary_color">Invoice No: </b>{{ $inv_prefix.$inv_number }} <br />
                                <b class="tm_primary_color">Invoice Date: </b>{{ displayDate($inv_date) }}
                            </p>
                        </div>
                    </div>
                    <div class="tm_invoice_right" style="width:37%;">
                        <div class="tm_f14">
                            <p class="tm_mb0">
                                <b class="tm_primary_color">CIN No: </b> {{ config('constant.CIN_NO'); }}<br />
                                <b class="tm_primary_color">GST No: </b> {{ config('constant.GST_NO'); }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="tm_f14">
                            <p class="tm_mb0">
                                <b class="tm_primary_color">Mobile: </b> {{ config('constant.COMPANY_MOBILE'); }}<br />
                                <b class="tm_primary_color">Email: </b> {{ config('constant.INFO_EMAIL'); }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="tm_f16 tm_section_heading tm_accent_border_20 tm_mb0">
                <span class="tm_accent_bg_10 tm_radius_0 tm_curve_35 tm_border tm_accent_border_20 tm_border_bottom_0 tm_accent_color"><span>Invoice To</span></span>
            </h2>
            <div class="tm_table tm_style1 tm_mb30">
                <div class="tm_border tm_accent_border_20 tm_border_top_0">
                    <div class="tm_table_responsive">
                        <table>
                            <tbody>
                            <tr>
                                <td class="tm_width_6 tm_border_top_0 tm_f14"><b class="tm_primary_color tm_medium">Name: </b>{{ $fullname }}</td>
                                <td class="tm_width_6 tm_border_top_0 tm_border_left tm_accent_border_20 tm_f14"><b class="tm_primary_color tm_medium">Phone: </b> {{ $mobile }}</td>
                            </tr>
                            <tr>
                                <td class="tm_width_6 tm_accent_border_20 tm_f14"><b class="tm_primary_color tm_medium">Email: </b>{{ $email }}</td>
                                <td class="tm_width_6 tm_border_left tm_accent_border_20 tm_f14"><b class="tm_primary_color tm_medium">Address: </b>{{ $city != '' || $city != null ? $city : 'N/A' }},{{ $state != '' || $state != null ? $state : 'N/A' }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tm_table tm_style1">
                <div class="tm_border tm_accent_border_20">
                    <div class="tm_table_responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="tm_width_3 tm_semi_bold tm_accent_color tm_accent_bg_10 tm_f14">#</th>
                                <th class="tm_width_4 tm_semi_bold tm_accent_color tm_accent_bg_10 tm_f14">Item</th>
                                <th class="tm_width_1 tm_semi_bold tm_accent_color tm_accent_bg_10 tm_f14">Qty</th>
                                <th class="tm_width_2 tm_semi_bold tm_accent_color tm_accent_bg_10 tm_f14">Amount(Rs.)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tm_width_2 tm_accent_border_20 tm_f14">1</td>
                                <td class="tm_width_5 tm_accent_border_20 tm_f14">
                                    <b>{{ (($acc_type == 1) ? 'Self Apply' : (($acc_type == 2) ? 'Hire Agent' : 'Loan Assistant')) }}</b><br />
                                    <span class="tm_f12">Number - {{ $card_number }}</span><br />
                                    <span class="tm_f12">Validity - {{ displayDate($registration_date)." to ".displayDate($expiry_date) }}</span>
                                </td>
                                <td class="tm_width_1 tm_accent_border_20 tm_f14">1</td>
                                <td class="tm_width_2 tm_accent_border_20 tm_text_right tm_f14">{{ formatePriceIndia($inv_price) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tm_invoice_footer tm_mb15 tm_m0_md">
                    <div class="tm_left_footer tm_note">
                        <p class="tm_mb2"><b class="tm_primary_color">Payment Details</b></p>
                        <p class="tm_m0 tm_f12">
                            Payment Method: Online Payment <br />
                            Payment Id: {{ $paymentid }}
                        </p>
                    </div>
                    <div class="tm_right_footer">
                        <table class="tm_mb15 tm_m0_md">
                            <tbody>
                            <tr>
                                <td class="tm_width_3 tm_primary_color tm_border_none tm_medium tm_f14">Subtoal</td>
                                <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_medium tm_f14">Rs.{{ formatePriceIndia($inv_price) }}</td>
                            </tr>
                            @if($inv_cgst > 0)
                                <tr>
                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0 tm_f14">+ 9% CGST</td>
                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_f14 tm_pt0">Rs.{{ formatePriceIndia($inv_cgst) }}</td>
                                </tr>
                            @endif
                            @if($inv_sgst > 0)
                                <tr>
                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0 tm_f14">+ 9% SGST</td>
                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_f14 tm_pt0">Rs.{{ formatePriceIndia($inv_sgst) }}</td>
                                </tr>
                            @endif
                            @if($inv_igst > 0)
                                <tr>
                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0 tm_f14">+ 18% IGST</td>
                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_f14 tm_pt0">Rs.{{ formatePriceIndia($inv_igst) }}</td>
                                </tr>
                            @endif
                            <tr class="tm_accent_border_20 tm_border">
                                <td class="tm_width_3 tm_bold tm_f16 tm_border_top_0 tm_accent_color tm_accent_bg_10">Grand Total</td>
                                <td class="tm_width_3 tm_bold tm_f16 tm_border_top_0 tm_accent_color tm_text_right tm_accent_bg_10">Rs.{{ formatePriceIndia($inv_grandtotal) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tm_invoice_footer tm_type1">
                    <div class="tm_left_footer">
                        <p class="tm_mb2"><b class="tm_primary_color">Note</b></p>
                        <p class="tm_m0 tm_f12">
                            Payment is refundable only in accordance with the company's <br />
                            Cancellation & Refund Policy.
                        </p>
                    </div>
                    <div class="tm_right_footer cust_authorized">
                        <div class="tm_sign tm_text_center">
                            <p class="tm_m0 tm_ternary_color">{{ config('constant.COMPANY_NAME'); }}</p>
                            <p class="tm_m0 tm_12 tm_primary_color">Authorized Person</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm_bottom_invoice tm_accent_border_20">
                <div class="tm_bottom_invoice_center">
                    <p class="tm_m0 tm_f12">This is Computer generated Invoice. Does not require any signature.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="tm_invoice_btns tm_hide_print">
        <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
                    <span class="tm_btn_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path>
                            <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect>
                            <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path>
                            <circle cx="392" cy="184" r="24" fill="currentColor"></circle>
                        </svg>
                    </span>
            <span class="tm_btn_text">Print</span>
        </a>
    </div>
</div>
@if($isCustomer)
    <script>
        window.onload = function(event) {
            window.print();
        };
    </script>
@endif
</body>
</html>
