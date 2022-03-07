<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather Tracker App</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- Styles -->
    <style>
        /*===========================================
         * Importing CSS Libraries
         *===========================================*/
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        nav,
        section,
        summary {
            display: block; }

        audio,
        canvas,
        video {
            display: inline-block; }

        audio:not([controls]) {
            display: none;
            height: 0; }

        [hidden], template {
            display: none; }

        body {
            font-family: 'Nunito', sans-serif;
        }
        html {
            background: #fff;
            color: #000;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%; }

        html,
        button,
        input,
        select,
        textarea {
            font-family: sans-serif; }

        body {
            margin: 0; }

        a {
            background: transparent; }
        a:focus {
            outline: thin dotted; }
        a:hover, a:active {
            outline: 0; }

        h1 {
            font-size: 2em;
            margin: 0.67em 0; }

        h2 {
            font-size: 1.5em;
            margin: 0.83em 0; }

        h3 {
            font-size: 1.17em;
            margin: 1em 0; }

        h4 {
            font-size: 1em;
            margin: 1.33em 0; }

        h5 {
            font-size: 0.83em;
            margin: 1.67em 0; }

        h6 {
            font-size: 0.75em;
            margin: 2.33em 0; }

        abbr[title] {
            border-bottom: 1px dotted; }

        b,
        strong {
            font-weight: bold; }

        dfn {
            font-style: italic; }

        mark {
            background: #ff0;
            color: #000; }

        code,
        kbd,
        pre,
        samp {
            font-family: monospace, serif;
            font-size: 1em; }

        pre {
            white-space: pre;
            white-space: pre-wrap;
            word-wrap: break-word; }

        q {
            quotes: "\201C" "\201D" "\2018" "\2019"; }

        q:before,
        q:after {
            content: '';
            content: none; }

        small {
            font-size: 80%; }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline; }

        sup {
            top: -0.5em; }

        sub {
            bottom: -0.25em; }

        img {
            border: 0; }

        svg:not(:root) {
            overflow: hidden; }

        figure {
            margin: 0; }

        fieldset {
            border: 1px solid #c0c0c0;
            margin: 0 2px;
            padding: 0.35em 0.625em 0.75em; }

        legend {
            border: 0;
            padding: 0;
            white-space: normal; }

        button,
        input,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            margin: 0;
            vertical-align: baseline; }

        button,
        input {
            line-height: normal; }

        button,
        select {
            text-transform: none; }

        button,
        html input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer; }

        button[disabled],
        input[disabled] {
            cursor: default; }

        input[type="checkbox"],
        input[type="radio"] {
            box-sizing: border-box;
            padding: 0; }

        input[type="search"] {
            -webkit-appearance: textfield;
            box-sizing: content-box; }

        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-decoration {
            -webkit-appearance: none; }

        button::-moz-focus-inner, input::-moz-focus-inner {
            border: 0;
            padding: 0; }

        textarea {
            overflow: auto;
            vertical-align: top; }

        my-table {
            border-collapse: collapse;
            border-spacing: 0; }

        *, *:before, *:after {
            box-sizing: border-box; }

        /*
         * Global Styles
         */
        html {
            font-size: 14px; }

        body {
            color: #bfc1c8;
            font-family: "Roboto", "Open Sans", sans-serif;
            font-size: 14px;
            font-weight: 300;
            line-height: 1.5;
            background: #1e202b; }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            margin: 0 0 20px;
            line-height: normal; }

        hr {
            border: none;
            border-bottom: 1px solid #777; }

        ul, ol {
            margin: 0;
            padding-left: 0; }

        a {
            text-decoration: none;
            color: #009ad8; }

        address {
            font-style: normal; }

        p {
            margin-top: 0; }

        form input, form textarea, form select {
            outline: none;
            border: none;
            padding: 10px;
            border-radius: 30px; }
        form select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none; }
        form textarea {
            resize: vertical; }

        /*
         * Reusable Components Style
         */
        .button, form input[type="submit"], form button, form input[type="reset"] {
            border: none;
            background: #009ad8;
            padding: 10px 20px;
            border-radius: 30px;
            color: white; }

        .map {
            height: 220px; }

        .container {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
            *zoom: 1; }
        .container:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }
        @media (min-width: 768px) {
            .container {
                width: 750px; } }
        @media (min-width: 992px) {
            .container {
                width: 970px; } }
        @media (min-width: 1200px) {
            .container {
                width: 1170px; } }

        .container-fluid {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
            *zoom: 1; }
        .container-fluid:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }

        .row {
            margin-left: -15px;
            margin-right: -15px;
            *zoom: 1; }
        .row:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }

        .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px; }

        .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
            float: left; }

        .col-xs-1 {
            width: 8.3333333333%; }

        .col-xs-2 {
            width: 16.6666666667%; }

        .col-xs-3 {
            width: 25%; }

        .col-xs-4 {
            width: 33.3333333333%; }

        .col-xs-5 {
            width: 41.6666666667%; }

        .col-xs-6 {
            width: 50%; }

        .col-xs-7 {
            width: 58.3333333333%; }

        .col-xs-8 {
            width: 66.6666666667%; }

        .col-xs-9 {
            width: 75%; }

        .col-xs-10 {
            width: 83.3333333333%; }

        .col-xs-11 {
            width: 91.6666666667%; }

        .col-xs-12 {
            width: 100%; }

        .col-xs-pull-0 {
            right: auto; }

        .col-xs-pull-1 {
            right: 8.3333333333%; }

        .col-xs-pull-2 {
            right: 16.6666666667%; }

        .col-xs-pull-3 {
            right: 25%; }

        .col-xs-pull-4 {
            right: 33.3333333333%; }

        .col-xs-pull-5 {
            right: 41.6666666667%; }

        .col-xs-pull-6 {
            right: 50%; }

        .col-xs-pull-7 {
            right: 58.3333333333%; }

        .col-xs-pull-8 {
            right: 66.6666666667%; }

        .col-xs-pull-9 {
            right: 75%; }

        .col-xs-pull-10 {
            right: 83.3333333333%; }

        .col-xs-pull-11 {
            right: 91.6666666667%; }

        .col-xs-pull-12 {
            right: 100%; }

        .col-xs-push-0 {
            left: auto; }

        .col-xs-push-1 {
            left: 8.3333333333%; }

        .col-xs-push-2 {
            left: 16.6666666667%; }

        .col-xs-push-3 {
            left: 25%; }

        .col-xs-push-4 {
            left: 33.3333333333%; }

        .col-xs-push-5 {
            left: 41.6666666667%; }

        .col-xs-push-6 {
            left: 50%; }

        .col-xs-push-7 {
            left: 58.3333333333%; }

        .col-xs-push-8 {
            left: 66.6666666667%; }

        .col-xs-push-9 {
            left: 75%; }

        .col-xs-push-10 {
            left: 83.3333333333%; }

        .col-xs-push-11 {
            left: 91.6666666667%; }

        .col-xs-push-12 {
            left: 100%; }

        .col-xs-offset-0 {
            margin-left: 0%; }

        .col-xs-offset-1 {
            margin-left: 8.3333333333%; }

        .col-xs-offset-2 {
            margin-left: 16.6666666667%; }

        .col-xs-offset-3 {
            margin-left: 25%; }

        .col-xs-offset-4 {
            margin-left: 33.3333333333%; }

        .col-xs-offset-5 {
            margin-left: 41.6666666667%; }

        .col-xs-offset-6 {
            margin-left: 50%; }

        .col-xs-offset-7 {
            margin-left: 58.3333333333%; }

        .col-xs-offset-8 {
            margin-left: 66.6666666667%; }

        .col-xs-offset-9 {
            margin-left: 75%; }

        .col-xs-offset-10 {
            margin-left: 83.3333333333%; }

        .col-xs-offset-11 {
            margin-left: 91.6666666667%; }

        .col-xs-offset-12 {
            margin-left: 100%; }

        @media (min-width: 768px) {
            .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
                float: left; }

            .col-sm-1 {
                width: 8.3333333333%; }

            .col-sm-2 {
                width: 16.6666666667%; }

            .col-sm-3 {
                width: 25%; }

            .col-sm-4 {
                width: 33.3333333333%; }

            .col-sm-5 {
                width: 41.6666666667%; }

            .col-sm-6 {
                width: 50%; }

            .col-sm-7 {
                width: 58.3333333333%; }

            .col-sm-8 {
                width: 66.6666666667%; }

            .col-sm-9 {
                width: 75%; }

            .col-sm-10 {
                width: 83.3333333333%; }

            .col-sm-11 {
                width: 91.6666666667%; }

            .col-sm-12 {
                width: 100%; }

            .col-sm-pull-0 {
                right: auto; }

            .col-sm-pull-1 {
                right: 8.3333333333%; }

            .col-sm-pull-2 {
                right: 16.6666666667%; }

            .col-sm-pull-3 {
                right: 25%; }

            .col-sm-pull-4 {
                right: 33.3333333333%; }

            .col-sm-pull-5 {
                right: 41.6666666667%; }

            .col-sm-pull-6 {
                right: 50%; }

            .col-sm-pull-7 {
                right: 58.3333333333%; }

            .col-sm-pull-8 {
                right: 66.6666666667%; }

            .col-sm-pull-9 {
                right: 75%; }

            .col-sm-pull-10 {
                right: 83.3333333333%; }

            .col-sm-pull-11 {
                right: 91.6666666667%; }

            .col-sm-pull-12 {
                right: 100%; }

            .col-sm-push-0 {
                left: auto; }

            .col-sm-push-1 {
                left: 8.3333333333%; }

            .col-sm-push-2 {
                left: 16.6666666667%; }

            .col-sm-push-3 {
                left: 25%; }

            .col-sm-push-4 {
                left: 33.3333333333%; }

            .col-sm-push-5 {
                left: 41.6666666667%; }

            .col-sm-push-6 {
                left: 50%; }

            .col-sm-push-7 {
                left: 58.3333333333%; }

            .col-sm-push-8 {
                left: 66.6666666667%; }

            .col-sm-push-9 {
                left: 75%; }

            .col-sm-push-10 {
                left: 83.3333333333%; }

            .col-sm-push-11 {
                left: 91.6666666667%; }

            .col-sm-push-12 {
                left: 100%; }

            .col-sm-offset-0 {
                margin-left: 0%; }

            .col-sm-offset-1 {
                margin-left: 8.3333333333%; }

            .col-sm-offset-2 {
                margin-left: 16.6666666667%; }

            .col-sm-offset-3 {
                margin-left: 25%; }

            .col-sm-offset-4 {
                margin-left: 33.3333333333%; }

            .col-sm-offset-5 {
                margin-left: 41.6666666667%; }

            .col-sm-offset-6 {
                margin-left: 50%; }

            .col-sm-offset-7 {
                margin-left: 58.3333333333%; }

            .col-sm-offset-8 {
                margin-left: 66.6666666667%; }

            .col-sm-offset-9 {
                margin-left: 75%; }

            .col-sm-offset-10 {
                margin-left: 83.3333333333%; }

            .col-sm-offset-11 {
                margin-left: 91.6666666667%; }

            .col-sm-offset-12 {
                margin-left: 100%; } }
        @media (min-width: 992px) {
            .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
                float: left; }

            .col-md-1 {
                width: 8.3333333333%; }

            .col-md-2 {
                width: 16.6666666667%; }

            .col-md-3 {
                width: 25%; }

            .col-md-4 {
                width: 33.3333333333%; }

            .col-md-5 {
                width: 41.6666666667%; }

            .col-md-6 {
                width: 50%; }

            .col-md-7 {
                width: 58.3333333333%; }

            .col-md-8 {
                width: 66.6666666667%; }

            .col-md-9 {
                width: 75%; }

            .col-md-10 {
                width: 83.3333333333%; }

            .col-md-11 {
                width: 91.6666666667%; }

            .col-md-12 {
                width: 100%; }

            .col-md-pull-0 {
                right: auto; }

            .col-md-pull-1 {
                right: 8.3333333333%; }

            .col-md-pull-2 {
                right: 16.6666666667%; }

            .col-md-pull-3 {
                right: 25%; }

            .col-md-pull-4 {
                right: 33.3333333333%; }

            .col-md-pull-5 {
                right: 41.6666666667%; }

            .col-md-pull-6 {
                right: 50%; }

            .col-md-pull-7 {
                right: 58.3333333333%; }

            .col-md-pull-8 {
                right: 66.6666666667%; }

            .col-md-pull-9 {
                right: 75%; }

            .col-md-pull-10 {
                right: 83.3333333333%; }

            .col-md-pull-11 {
                right: 91.6666666667%; }

            .col-md-pull-12 {
                right: 100%; }

            .col-md-push-0 {
                left: auto; }

            .col-md-push-1 {
                left: 8.3333333333%; }

            .col-md-push-2 {
                left: 16.6666666667%; }

            .col-md-push-3 {
                left: 25%; }

            .col-md-push-4 {
                left: 33.3333333333%; }

            .col-md-push-5 {
                left: 41.6666666667%; }

            .col-md-push-6 {
                left: 50%; }

            .col-md-push-7 {
                left: 58.3333333333%; }

            .col-md-push-8 {
                left: 66.6666666667%; }

            .col-md-push-9 {
                left: 75%; }

            .col-md-push-10 {
                left: 83.3333333333%; }

            .col-md-push-11 {
                left: 91.6666666667%; }

            .col-md-push-12 {
                left: 100%; }

            .col-md-offset-0 {
                margin-left: 0%; }

            .col-md-offset-1 {
                margin-left: 8.3333333333%; }

            .col-md-offset-2 {
                margin-left: 16.6666666667%; }

            .col-md-offset-3 {
                margin-left: 25%; }

            .col-md-offset-4 {
                margin-left: 33.3333333333%; }

            .col-md-offset-5 {
                margin-left: 41.6666666667%; }

            .col-md-offset-6 {
                margin-left: 50%; }

            .col-md-offset-7 {
                margin-left: 58.3333333333%; }

            .col-md-offset-8 {
                margin-left: 66.6666666667%; }

            .col-md-offset-9 {
                margin-left: 75%; }

            .col-md-offset-10 {
                margin-left: 83.3333333333%; }

            .col-md-offset-11 {
                margin-left: 91.6666666667%; }

            .col-md-offset-12 {
                margin-left: 100%; } }
        @media (min-width: 1200px) {
            .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
                float: left; }

            .col-lg-1 {
                width: 8.3333333333%; }

            .col-lg-2 {
                width: 16.6666666667%; }

            .col-lg-3 {
                width: 25%; }

            .col-lg-4 {
                width: 33.3333333333%; }

            .col-lg-5 {
                width: 41.6666666667%; }

            .col-lg-6 {
                width: 50%; }

            .col-lg-7 {
                width: 58.3333333333%; }

            .col-lg-8 {
                width: 66.6666666667%; }

            .col-lg-9 {
                width: 75%; }

            .col-lg-10 {
                width: 83.3333333333%; }

            .col-lg-11 {
                width: 91.6666666667%; }

            .col-lg-12 {
                width: 100%; }

            .col-lg-pull-0 {
                right: auto; }

            .col-lg-pull-1 {
                right: 8.3333333333%; }

            .col-lg-pull-2 {
                right: 16.6666666667%; }

            .col-lg-pull-3 {
                right: 25%; }

            .col-lg-pull-4 {
                right: 33.3333333333%; }

            .col-lg-pull-5 {
                right: 41.6666666667%; }

            .col-lg-pull-6 {
                right: 50%; }

            .col-lg-pull-7 {
                right: 58.3333333333%; }

            .col-lg-pull-8 {
                right: 66.6666666667%; }

            .col-lg-pull-9 {
                right: 75%; }

            .col-lg-pull-10 {
                right: 83.3333333333%; }

            .col-lg-pull-11 {
                right: 91.6666666667%; }

            .col-lg-pull-12 {
                right: 100%; }

            .col-lg-push-0 {
                left: auto; }

            .col-lg-push-1 {
                left: 8.3333333333%; }

            .col-lg-push-2 {
                left: 16.6666666667%; }

            .col-lg-push-3 {
                left: 25%; }

            .col-lg-push-4 {
                left: 33.3333333333%; }

            .col-lg-push-5 {
                left: 41.6666666667%; }

            .col-lg-push-6 {
                left: 50%; }

            .col-lg-push-7 {
                left: 58.3333333333%; }

            .col-lg-push-8 {
                left: 66.6666666667%; }

            .col-lg-push-9 {
                left: 75%; }

            .col-lg-push-10 {
                left: 83.3333333333%; }

            .col-lg-push-11 {
                left: 91.6666666667%; }

            .col-lg-push-12 {
                left: 100%; }

            .col-lg-offset-0 {
                margin-left: 0%; }

            .col-lg-offset-1 {
                margin-left: 8.3333333333%; }

            .col-lg-offset-2 {
                margin-left: 16.6666666667%; }

            .col-lg-offset-3 {
                margin-left: 25%; }

            .col-lg-offset-4 {
                margin-left: 33.3333333333%; }

            .col-lg-offset-5 {
                margin-left: 41.6666666667%; }

            .col-lg-offset-6 {
                margin-left: 50%; }

            .col-lg-offset-7 {
                margin-left: 58.3333333333%; }

            .col-lg-offset-8 {
                margin-left: 66.6666666667%; }

            .col-lg-offset-9 {
                margin-left: 75%; }

            .col-lg-offset-10 {
                margin-left: 83.3333333333%; }

            .col-lg-offset-11 {
                margin-left: 91.6666666667%; }

            .col-lg-offset-12 {
                margin-left: 100%; } }
        @-ms-viewport {
            width: device-width; }
        .visible-xs, .visible-sm, .visible-md, .visible-lg {
            display: none !important; }

        .visible-xs-block,
        .visible-xs-inline,
        .visible-xs-inline-block,
        .visible-sm-block,
        .visible-sm-inline,
        .visible-sm-inline-block,
        .visible-md-block,
        .visible-md-inline,
        .visible-md-inline-block,
        .visible-lg-block,
        .visible-lg-inline,
        .visible-lg-inline-block {
            display: none !important; }

        @media (max-width: 767px) {
            .visible-xs {
                display: block !important; }

            my-table.visible-xs {
                display: table; }

            tr.visible-xs {
                display: table-row !important; }

            th.visible-xs,
            td.visible-xs {
                display: table-cell !important; } }
        @media (max-width: 767px) {
            .visible-xs-block {
                display: block !important; } }

        @media (max-width: 767px) {
            .visible-xs-inline {
                display: inline !important; } }

        @media (max-width: 767px) {
            .visible-xs-inline-block {
                display: inline-block !important; } }

        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm {
                display: block !important; }

            my-table.visible-sm {
                display: table; }

            tr.visible-sm {
                display: table-row !important; }

            th.visible-sm,
            td.visible-sm {
                display: table-cell !important; } }
        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-block {
                display: block !important; } }

        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-inline {
                display: inline !important; } }

        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-inline-block {
                display: inline-block !important; } }

        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md {
                display: block !important; }

            my-table.visible-md {
                display: table; }

            tr.visible-md {
                display: table-row !important; }

            th.visible-md,
            td.visible-md {
                display: table-cell !important; } }
        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-block {
                display: block !important; } }

        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-inline {
                display: inline !important; } }

        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-inline-block {
                display: inline-block !important; } }

        @media (min-width: 1200px) {
            .visible-lg {
                display: block !important; }

            my-table.visible-lg {
                display: table; }

            tr.visible-lg {
                display: table-row !important; }

            th.visible-lg,
            td.visible-lg {
                display: table-cell !important; } }
        @media (min-width: 1200px) {
            .visible-lg-block {
                display: block !important; } }

        @media (min-width: 1200px) {
            .visible-lg-inline {
                display: inline !important; } }

        @media (min-width: 1200px) {
            .visible-lg-inline-block {
                display: inline-block !important; } }

        @media (max-width: 767px) {
            .hidden-xs {
                display: none !important; } }
        @media (min-width: 768px) and (max-width: 991px) {
            .hidden-sm {
                display: none !important; } }
        @media (min-width: 992px) and (max-width: 1199px) {
            .hidden-md {
                display: none !important; } }
        @media (min-width: 1200px) {
            .hidden-lg {
                display: none !important; } }
        .visible-print {
            display: none !important; }

        @media print {
            .visible-print {
                display: block !important; }

            my-table.visible-print {
                display: table; }

            tr.visible-print {
                display: table-row !important; }

            th.visible-print,
            td.visible-print {
                display: table-cell !important; } }
        .visible-print-block {
            display: none !important; }
        @media print {
            .visible-print-block {
                display: block !important; } }

        .visible-print-inline {
            display: none !important; }
        @media print {
            .visible-print-inline {
                display: inline !important; } }

        .visible-print-inline-block {
            display: none !important; }
        @media print {
            .visible-print-inline-block {
                display: inline-block !important; } }

        @media print {
            .hidden-print {
                display: none !important; } }
        /*
         * Header Styles
         */
        .site-header {
            padding: 25px 0; }
        .site-header .branding {
            float: left; }
        .site-header .branding .logo, .site-header .branding .logo-type {
            display: inline-block;
            vertical-align: middle; }
        .site-header .branding .logo {
            margin-right: 10px; }
        .site-header .branding .site-title {
            margin-bottom: 5px;
            font-size: 16px;
            font-size: 1.1428571429em;
            color: white; }
        .site-header .branding .site-description {
            font-size: 10px;
            font-size: 0.7142857143em;
            display: block;
            color: #bfc1c8; }

        .main-navigation {
            float: right; }
        .main-navigation .menu-toggle, .main-navigation .menu {
            vertical-align: middle; }
        .main-navigation .menu-toggle {
            background: none;
            border: 2px solid transparent;
            color: white;
            padding: 20px;
            border-radius: 40px;
            -webkit-transition: .3s ease;
            transition: .3s ease;
            display: none;
            outline: none; }
        @media screen and (max-width: 990px) {
            .main-navigation .menu-toggle {
                display: inline-block; } }
        .main-navigation .menu-toggle:hover, .main-navigation .menu-toggle:active {
            border-color: #009ad8;
            color: #009ad8; }
        .main-navigation .menu {
            list-style: none;
            display: inline-block;
            *zoom: 1; }
        .main-navigation .menu:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }
        @media screen and (max-width: 990px) {
            .main-navigation .menu {
                display: none; } }
        .main-navigation .menu .menu-item {
            float: left;
            margin-left: 10px; }
        .main-navigation .menu .menu-item a {
            padding: 5px 25px;
            border: 2px solid transparent;
            border-radius: 30px;
            color: white;
            -webkit-transition: .3s ease;
            transition: .3s ease;
            font-weight: 400; }
        .main-navigation .menu .menu-item.current-menu-item a, .main-navigation .menu .menu-item:hover a {
            border-color: #009ad8;
            color: #009ad8; }

        .mobile-navigation {
            padding: 30px 0 0;
            clear: both;
            display: none; }
        @media screen and (min-width: 991px) {
            .mobile-navigation {
                display: none !important; } }
        .mobile-navigation .menu {
            background: #262936;
            list-style: none;
            text-align: center;
            border-radius: 10px;
            overflow: hidden; }
        .mobile-navigation .menu a {
            padding: 20px;
            display: block;
            color: white; }
        .mobile-navigation .menu .menu-item {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1); }
        .mobile-navigation .menu .menu-item:last-child {
            border-bottom: none; }
        .mobile-navigation .menu .menu-item.current-menu-item a {
            color: #009ad8; }

        .hero {
            background-size: cover;
            padding: 70px 0;
            min-height: 350px;
            background-image: url("images/banner.png");
        }
        .find-location {
            position: relative;
            margin-bottom: 10px; }
        .find-location input[type="text"] {
            width: 100%;
            padding: 20px 50px 20px 20px;
            background: #1e202b;
            color: white; }
        .find-location input[type="submit"] {
            position: absolute;
            top: 5px;
            right: 5px;
            bottom: 5px;
            padding: 0 40px; }

        .forecast-container {
            width: 100%;
            background: #323544;
            display: table;
            table-layout: fixed;
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
            margin-top: -150px;
            margin-bottom: 50px; }
        .forecast-container .forecast {
            display: table-cell;
            vertical-align: top; }
        .forecast-container .forecast:nth-child(even) {
            background-color: #262936; }
        @media screen and (max-width: 990px) {
            .forecast-container .forecast {
                display: block;
                width: 16.6667%;
                float: left; } }
        .forecast-container .forecast.today {
            width: 300px; }
        .forecast-container .forecast.today .forecast-header {
            *zoom: 1; }
        .forecast-container .forecast.today .forecast-header:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }
        .forecast-container .forecast.today .forecast-header .day {
            float: left; }
        .forecast-container .forecast.today .forecast-header .date {
            float: right; }
        .forecast-container .forecast.today .forecast-content {
            text-align: left;
            padding-top: 30px;
            padding-bottom: 30px; }
        .forecast-container .forecast.today .location {
            font-size: 18px;
            font-size: 1.2857142857em;
            font-weight: 400; }
        .forecast-container .forecast.today .degree .num, .forecast-container .forecast.today .degree .forecast-icon {
            display: inline-block;
            vertical-align: middle; }
        .forecast-container .forecast.today .degree .num {
            font-size: 90px;
            font-size: 2.428571rem;
            margin-right: 30px; }
        .forecast-container .forecast.today span {
            margin-right: 20px; }
        .forecast-container .forecast.today span img {
            margin-right: 5px;
            vertical-align: middle; }
        @media screen and (max-width: 990px) {
            .forecast-container .forecast.today {
                display: block;
                width: 100%; } }
        .forecast-container .forecast .forecast-header {
            background: rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
            font-weight: 400; }
        .forecast-container .forecast .forecast-icon {
            height: 50px; }
        .forecast-container .forecast .forecast-content {
            padding: 50px 20px 10px;
            text-align: center; }
        .forecast-container .forecast .forecast-content .forecast-icon {
            margin-bottom: 20px; }
        .forecast-container .forecast .forecast-content .degree {
            font-size: 24px;
            font-size: 1.7142857143em;
            color: white;
            font-weight: 700; }
        .forecast-container .forecast .forecast-content small {
            font-size: 16px;
            font-size: 1.1428571429em; }

        .fullwidth-block {
            padding: 70px 0; }
        .fullwidth-block .section-title {
            font-size: 36px;
            font-size: 2.5714285714em;
            font-weight: 300;
            color: white; }

        .filter {
            margin-bottom: 30px; }

        .filter-control {
            border: 2px solid #262936;
            padding: 5px 5px 5px 20px;
            border-radius: 30px;
            display: inline-block;
            white-space: nowrap; }
        .filter-control label {
            margin-right: 10px;
            display: inline-block;
            padding: 10px;
            vertical-align: middle; }

        .select.control {
            background: #262936;
            border-radius: 40px;
            overflow: hidden;
            display: inline-block;
            vertical-align: middle;
            padding-right: 30px;
            position: relative; }
        .select.control:after {
            content: " ";
            width: 7px;
            height: 9px;
            background: url(images/arrow-down.png);
            position: absolute;
            right: 10px;
            top: 0;
            bottom: 0;
            margin: auto;
            display: block;
            z-index: 1; }
        .select.control select {
            padding: 10px 30px;
            width: 110%;
            border: none;
            background: none;
            outline: none;
            appearance: none;
            -webkit-appearance: none;
            color: white; }

        .live-camera {
            margin-bottom: 30px; }
        .live-camera .live-camera-cover {
            position: relative;
            margin-bottom: 20px;
            cursor: pointer; }
        .live-camera .live-camera-cover:after {
            content: " ";
            width: 45px;
            height: 45px;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            background: url(images/play-button.png); }
        .live-camera .live-camera-cover img {
            display: block;
            width: 100%;
            height: auto;
            max-width: 100%;
            border-radius: 5px; }
        .live-camera .location {
            margin-bottom: 5px;
            color: white;
            font-weight: 300; }

        .news {
            padding-left: 100px;
            position: relative; }
        .news:after {
            content: " ";
            width: 12px;
            height: 7px;
            background: url(images/arrow.png);
            display: block; }
        .news .date {
            position: absolute;
            top: 0;
            left: 0;
            color: #009ad8;
            font-size: 24px;
            font-size: 1.7142857143em; }
        .news h3 {
            font-size: 14px;
            font-size: 1em; }
        .news h3 a {
            color: white; }

        .arrow-feature {
            list-style-type: none; }
        .arrow-feature li {
            position: relative;
            padding-left: 30px; }
        .arrow-feature li:before {
            content: " ";
            width: 12px;
            height: 7px;
            background: url(images/arrow.png);
            position: absolute;
            left: 0;
            top: 5px; }
        .arrow-feature li h3 {
            font-size: 14px;
            font-size: 1em;
            color: white; }

        .arrow-list {
            list-style-image: url(images/arrow.png);
            list-style-position: inside; }
        .arrow-list li {
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1); }
        .arrow-list li:last-child {
            border-bottom: none; }
        .arrow-list a {
            color: white; }
        .arrow-list a:hover {
            color: #009ad8; }

        .photo-grid {
            margin: 0 -5px; }
        .photo-grid a {
            width: 33.333%;
            padding: 5px;
            float: left; }
        .photo-grid a img {
            display: block;
            width: 100%;
            max-width: 100%;
            height: auto; }

        .breadcrumb {
            background: #262936;
            border-radius: 40px;
            padding: 20px 30px;
            font-size: 13px;
            font-size: 0.9285714286em; }
        .breadcrumb a {
            color: #bfc1c8; }
        .breadcrumb a:after {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            width: 12px;
            height: 7px;
            background: url(images/arrow-gray.png) no-repeat;
            margin: 0 10px; }
        .breadcrumb a:hover {
            text-decoration: underline; }
        .breadcrumb span {
            color: white; }

        .post {
            padding: 50px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1); }
        .post.single {
            border-bottom: none; }
        .post:first-child {
            padding-top: 0; }
        .post .entry-title {
            font-size: 30px;
            font-size: 2.1428571429em;
            font-weight: 300;
            color: white; }
        .post .featured-image {
            margin-bottom: 20px; }
        .post .featured-image img {
            width: 100%;
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            display: block; }
        .post p {
            margin-bottom: 30px; }

        .entry-content blockquote {
            margin-left: 50px;
            padding-left: 50px;
            position: relative; }
        .entry-content blockquote:before {
            content: " ";
            width: 30px;
            height: 23px;
            background: url(images/quote.png);
            position: absolute;
            top: 0;
            left: 0; }
        .entry-content blockquote p {
            font-size: 24px;
            font-size: 1.7142857143rem;
            color: #009ad8; }

        .photo {
            position: relative;
            padding-left: 50%;
            min-height: 190px;
            border-radius: 10px;
            overflow: hidden;
            background: #262936;
            margin-bottom: 30px; }
        .photo .photo-preview {
            position: absolute;
            width: 50%;
            left: 0;
            top: 0;
            bottom: 0;
            background-size: cover; }
        .photo .photo-details {
            padding: 20px; }
        .photo .photo-title {
            margin-bottom: 10px;
            font-weight: 300; }
        .photo .photo-title a {
            color: white; }

        .star-rating {
            float: none;
            overflow: hidden;
            position: relative;
            height: 15px;
            line-height: 15px;
            font-size: 16px;
            width: 100px;
            font-family: 'FontAwesome'; }
        .star-rating:before {
            content: "\f005\f005\f005\f005\f005";
            color: #1e202b;
            float: left;
            top: 0;
            left: 0;
            position: absolute; }
        .star-rating span {
            overflow: hidden;
            float: left;
            top: 0;
            left: 0;
            position: absolute;
            padding-top: 1.5em;
            color: #009ad8;
            font-size: 16px; }
        .star-rating span:before {
            content: "\f005\f005\f005\f005\f005";
            top: 0;
            position: absolute;
            left: 0; }

        .contact-details {
            background: #262936;
            border-radius: 10px;
            overflow: hidden; }
        .contact-details .map {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px; }
        .contact-details .contact-info {
            padding: 20px; }
        .contact-details address {
            padding-left: 30px;
            position: relative; }
        .contact-details address img {
            position: absolute;
            left: 0;
            top: 0; }
        .contact-details a {
            margin-right: 20px;
            color: #bfc1c8; }
        .contact-details a img {
            margin-right: 10px;
            vertical-align: middle; }

        .contact-form [class*="col"] {
            padding: 0 5px; }
        .contact-form .row {
            margin: 0 -5px; }
        .contact-form input:not([type="submit"]), .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            color: white;
            border: 2px solid #393c48;
            background: transparent; }
        .contact-form input:not([type="submit"]):hover, .contact-form input:not([type="submit"]):focus, .contact-form textarea:hover, .contact-form textarea:focus {
            border-color: #009ad8; }
        .contact-form textarea {
            min-height: 150px; }
        .contact-form .text-right {
            text-align: right; }

        .sidebar .widget {
            background: #262936;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px; }
        .sidebar .widget .widget-title {
            font-size: 24px;
            font-size: 1.7142857143em;
            margin-bottom: 20px;
            font-weight: 300; }
        .sidebar .widget .arrow-list li {
            border: none; }
        .sidebar .widget.top-rated {
            padding: 0; }
        .sidebar .widget.top-rated .widget-title {
            padding: 20px 20px 0; }
        .sidebar .widget.top-rated ul {
            list-style: none; }
        .sidebar .widget.top-rated ul li {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 10px 20px; }
        .sidebar .widget.top-rated ul li:last-child {
            border-bottom: none; }
        .sidebar .widget.top-rated .entry-title {
            font-size: 14px;
            font-size: 1em;
            margin-bottom: 5px;
            font-weight: 300; }
        .sidebar .widget.top-rated .entry-title a {
            color: #bfc1c8; }
        .sidebar .widget.top-rated .rating strong {
            color: #009ad8; }

        /*
         * Footer Styles
         */
        .site-footer {
            background: #262936;
            padding: 50px 0; }
        .site-footer .subscribe-form {
            position: relative;
            margin-bottom: 30px; }
        .site-footer .subscribe-form input[type="text"] {
            padding: 20px 100px 20px 20px;
            background: #1e202b;
            width: 100%;
            color: white; }
        .site-footer .subscribe-form input[type="submit"] {
            position: absolute;
            right: 5px;
            top: 5px;
            bottom: 5px; }
        .site-footer .social-links a {
            width: 40px;
            height: 40px;
            display: inline-block;
            border-radius: 50%;
            background: #1e202b;
            color: #009ad8;
            text-align: center;
            line-height: 2;
            -webkit-transition: .3s ease;
            transition: .3s ease;
            font-size: 20px;
            font-size: 1.4285714286em; }
        .site-footer .social-links a:hover {
            background: #009ad8;
            color: white; }

        .my-table {
            padding: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        .my-table td,
        .my-table th {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 16px;
        }

        .my-table th {
            background-color: #009ad8;
            color: #ffffff;
        }

        .my-table tbody tr:nth-child(even) {
            background-color: #fff;
            color: #000;
        }
        .container {
            max-width: 960px;
            height: 100%;
            margin: 0 auto;
            padding: 1.5em;
        }

        form > div {
            display: flex;
            flex-wrap: wrap;
        }

        form > div > p {
            min-width: 33.33%;
            padding: 10px;
        }

        /* ------------------- */
        /* Form Styles
        /* ----------------- */

        form > div { margin-bottom: 1em; }

        button,
        input,
        optgroup,
        select,
        keygen::-webkit-keygen-select,
        select[_moz-type="-mozilla-keygen"],
        textarea {
            color: inherit;
            font: inherit;
            margin: 0;
            margin-top: 0.5em;
        }

        label {
            display: block;
            margin: 0.75em 0;
            font-weight: bold;
        }

        input[type="radio"] + label,
        input[type="checkbox"] + label {
            margin: 0;
            font-weight: 400;
        }

        button,
        input[type=button],
        input[type=reset],
        input[type=submit],
        {
            -webkit-appearance: button;
            cursor: pointer;
        }

        button[disabled],
        input[disabled] {
            cursor: default;
        }

        input {
            line-height: normal;
        }

        textarea { line-height: 1.25em; }

        select {
            border: 1px solid #ccc;
            background-color: #fff;
        }

        input[type=checkbox],
        input[type=radio] {
            box-sizing: border-box;
            padding: 0;
            display: block;
            margin-right: 0.25em;
            margin-top: 2px;
            float: left;
            clear: both;
        }

        input[type=search] {
            -webkit-appearance: textfield;
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
        }

        input[type=search]::-webkit-search-cancel-button,
        input[type=search]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        input[type=text],
        input[type=password],
        input[type=email],
        input[type=url],
        input[type=date],
        input[type=month],
        input[type=time],
        input[type=datetime],
        input[type=datetime-local],
        input[type=week],
        input[type=number],
        input[type=search],
        input[type=tel],
        input[type=color],
        select[_moz-type="-mozilla-keygen"],
        keygen::-webkit-keygen-select,
        select,
        textarea {
            /*border: 1px solid #ccc;*/
            /*box-shadow: inset 0 1px 3px #ddd;*/
            /*border-radius: 2px;*/
            color: black;
            vertical-align: middle;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            max-width: 100%;
            padding: 0.5em 0.6em;
            width: 75%;
            /*margin-bottom: 0.5em;*/
        }

        input[type=color] {
            padding: 0;
        }

        input:not([type]) {
            display: inline-block;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 3px #ddd;
            border-radius: 2px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0.5em 0.6em;
        }

        input[type=color] {
            padding: 0.2em 0.5em;
        }

        input[type=file]:focus,
        input[type=radio]:focus,
        input[type=checkbox]:focus {
            outline: 1px auto #129FEA;
        }

        input[readonly],
        select[readonly],
        textarea[readonly] {
            background-color: #eee;
            color: #777;
            border-color: #ccc;
        }

        input:focus:invalid,
        textarea:focus:invalid,
        select:focus:invalid {
            color: #b94a48;
            border-color: #e9322d;
        }

        input[type=file]:focus:invalid:focus,
        input[type=radio]:focus:invalid:focus,
        input[type=checkbox]:focus:invalid:focus {
            outline-color: #e9322d;
        }


        /* Style your form buttons. Follow your heart */

        input[type="submit"],
        input[type="reset"],
        input[type="button"],
        button {
            display: inline-block;
            padding: 8px 12px;
            color: white;
            background-color: tomato;
            border: 0;
            cursor: pointer;
            transition: all 300ms ease;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover,
        input[type="button"]:hover,
        button:hover {
            background-color: royalblue;
        }
    </style>
</head>
<body>

<div class="site-content">
    <div class="site-header">
        <div class="container">
            <a  href="{{ url('/') }}" class="branding">
                <img src="images/logo.png" alt="" class="logo">
                <div class="logo-type">
                    <h1 class="site-title">Weather Tracker</h1>
                    <small class="site-description">Want to know how to dress tomorrow?</small>
                </div>
            </a>

            <!-- Default snippet for navigation -->
            <div class="main-navigation">
                <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                <ul class="menu">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            <li class="menu-item current-menu-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="menu-item current-menu-item"><a href="{{ route('history') }}">Weather History</a></li>
                            @auth
                                @if (Auth::user()->type == 'admin')
                                    <li class="menu-item current-menu-item"><a href="{{ route('users') }}">Users</a></li>
                                @endif
                            @else
                                <li class="menu-item current-menu-item"><a href="{{ route('login') }}">Login</a></li>

                                @if (Route::has('register'))
                                    <li class="menu-item current-menu-item"><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                            @guest
                            @else
                                <li class="menu-item current-menu-item">
                                    <a     style="margin-top: -7px;" class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a></li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endguest
                        </div>
                    @endif
                </ul> <!-- .menu -->
            </div> <!-- .main-navigation -->

            <div class="mobile-navigation"></div>

        </div>
    </div> <!-- .site-header -->
    @yield('content')
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter your email to subscribe...">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>

            <p class="colophon">Copyright 2022 Weather Tracker APP.</p>
        </div>
    </footer> <!-- .site-footer -->
</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

</body>
</html>
