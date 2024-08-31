<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Spacing;
use App\Models\Style;
use App\Models\StyleCategory;
use App\Models\StyleCategoryType;
use Illuminate\Database\Seeder;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layout = [
            "aspect-ratio" => [
                "aspect-auto" => "aspect-ratio: auto;",
                "aspect-video" => "aspect-ratio: 16 / 9;",
                "aspect-square" => "aspect-ratio: 1 / 1;",
            ],

            "container" => [
                "container" => "max-width: 100%; margin-left: auto; margin-right: auto;",
                "mx-auto" => "margin-left: auto; margin-right: auto;",
                "max-width" => "max-width: 100%;",
                "min-width" => "min-width: 0;",
            ],

            "columns" => [
                "columns-1" => "column-count: 1;",
                "columns-2" => "column-count: 2;",
                "columns-3" => "column-count: 3;",
                "columns-4" => "column-count: 4;",
                "columns-5" => "column-count: 5;",
                "columns-6" => "column-count: 6;",
                "columns-7" => "column-count: 7;",
                "columns-8" => "column-count: 8;",
                "columns-9" => "column-count: 9;",
                "columns-10" => "column-count: 10;",
                "columns-11" => "column-count: 11;",
                "columns-12" => "column-count: 12;",
                "columns-auto" => "column-count: auto;",
                "columns-3xs" => "column-count: 3xs;",
                "columns-2xs" => "column-count: 2xs;",
                "columns-xs" => "column-count: xs;",
                "columns-sm" => "column-count: sm;",
                "columns-md" => "column-count: md;",
                "columns-lg" => "column-count: lg;",
                "columns-xl" => "column-count: xl;",
                "columns-2xl" => "column-count: 2xl;",
                "columns-3xl" => "column-count: 3xl;",
                "columns-4xl" => "column-count: 4xl;",
                "columns-5xl" => "column-count: 5xl;",
                "columns-6xl" => "column-count: 6xl;",
                "columns-7xl" => "column-count: 7xl;",
            ],

            "break-after" => [
                "break-after-auto" => "break-after: auto;",
                "break-after-avoid" => "break-after: avoid;",
                "break-after-all" => "break-after: all;",
                "break-after-avoid-page" => "break-after: avoid-page;",
                "break-after-page" => "break-after: page;",
                "break-after-left" => "break-after: left;",
                "break-after-right" => "break-after: right;",
                "break-after-column" => "break-after: column;",
            ],

            "break-before" => [
                "break-before-auto" => "break-before: auto;",
                "break-before-avoid" => "break-before: avoid;",
                "break-before-all" => "break-before: all;",
                "break-before-avoid-page" => "break-before: avoid-page;",
                "break-before-page" => "break-before: page;",
                "break-before-left" => "break-before: left;",
                "break-before-right" => "break-before: right;",
                "break-before-column" => "break-before: column;",
            ],

            "break-inside" => [
                "break-inside-auto" => "break-inside: auto;",
                "break-inside-avoid" => "break-inside: avoid;",
                "break-inside-avoid-page" => "break-inside: avoid-page;",
                "break-inside-avoid-column" => "break-inside: avoid-column;",
            ],

            "box-decoration" => [
                "box-decoration-clone" => "box-decoration-break: clone;",
                "box-decoration-slice" => "box-decoration-break: slice;",
            ],

            "box-sizing" => [
                "box-border" => "box-sizing: border-box;",
                "box-content" => "box-sizing: content-box;",
            ],

            "display" => [
                "block" => "display: block;",
                "inline-block" => "display: inline-block;",
                "inline" => "display: inline;",
                "flex" => "display: flex;",
                "inline-flex" => "display: inline-flex;",
                "table" => "display: table;",
                "inline-table" => "display: inline-table;",
                "table-caption" => "display: table-caption;",
                "table-cell" => "display: table-cell;",
                "table-column" => "display: table-column;",
                "table-column-group" => "display: table-column-group;",
                "table-footer-group" => "display: table-footer-group;",
                "table-header-group" => "display: table-header-group;",
                "table-row-group" => "display: table-row-group;",
                "table-row" => "display: table-row;",
                "flow-root" => "display: flow-root;",
                "grid" => "display: grid;",
                "inline-grid" => "display: inline-grid;",
                "contents" => "display: contents;",
                "list-item" => "display: list-item;",
                "hidden" => "display: none;",
            ],

            "float" => [
                "float-right" => "float: right;",
                "float-left" => "float: left;",
                "float-none" => "float: none;",
            ],

            "clear" => [
                "clear-left" => "clear: left;",
                "clear-right" => "clear: right;",
                "clear-both" => "clear: both;",
                "clear-none" => "clear: none;",
            ],

            "isolation" => [
                "isolate" => "isolation: isolate;",
                "isolation-auto" => "isolation: auto;",
            ],

            "object-fit" => [
                "object-contain" => "object-fit: contain;",
                "object-cover" => "object-fit: cover;",
                "object-fill" => "object-fit: fill;",
                "object-none" => "object-fit: none;",
                "object-scale-down" => "object-fit: scale-down;",
            ],

            "object-position" => [
                "object-bottom" => "object-position: bottom;",
                "object-center" => "object-position: center;",
                "object-left" => "object-position: left;",
                "object-left-bottom" => "object-position: left bottom;",
                "object-left-top" => "object-position: left top;",
                "object-right" => "object-position: right;",
                "object-right-bottom" => "object-position: right bottom;",
                "object-right-top" => "object-position: right top;",
                "object-top" => "object-position: top;",
            ],

            "overflow" => [
                "overflow-auto" => "overflow: auto;",
                "overflow-hidden" => "overflow: hidden;",
                "overflow-clip" => "overflow: clip;",
                "overflow-visible" => "overflow: visible;",
                "overflow-scroll" => "overflow: scroll;",
                "overflow-x-auto" => "overflow-x: auto;",
                "overflow-y-auto" => "overflow-y: auto;",
                "overflow-x-hidden" => "overflow-x: hidden;",
                "overflow-y-hidden" => "overflow-y: hidden;",
                "overflow-x-clip" => "overflow-x: clip;",
                "overflow-y-clip" => "overflow-y: clip;",
                "overflow-x-visible" => "overflow-x: visible;",
                "overflow-y-visible" => "overflow-y: visible;",
                "overflow-x-scroll" => "overflow-x: scroll;",
                "overflow-y-scroll" => "overflow-y: scroll;",
            ],

            "overscroll-behavior" => [
                "overscroll-auto" => "overscroll-behavior: auto;",
                "overscroll-contain" => "overscroll-behavior: contain;",
                "overscroll-none" => "overscroll-behavior: none;",
                "overscroll-y-auto" => "overscroll-behavior-y: auto;",
                "overscroll-y-contain" => "overscroll-behavior-y: contain;",
                "overscroll-y-none" => "overscroll-behavior-y: none;",
                "overscroll-x-auto" => "overscroll-behavior-x: auto;",
                "overscroll-x-contain" => "overscroll-behavior-x: contain;",
                "overscroll-x-none" => "overscroll-behavior-x: none;",
            ],

            "position" => [
                "static" => "position: static;",
                "fixed" => "position: fixed;",
                "absolute" => "position: absolute;",
                "relative" => "position: relative;",
                "sticky" => "position: sticky;",
            ],

            "top-right-bottom-left" => [
                "inset-px" => "inset: 1px;",
                "inset-x-px" => "inset-inline: 1px;",
                "inset-y-px" => "inset-block: 1px;",
                "start-px" => "inset-inline-start: 1px;",
                "end-px" => "inset-inline-end: 1px;",
                "top-px" => "inset-block-start: 1px;",
                "right-px" => "inset-inline-end: 1px;",
                "bottom-px" => "inset-block-end: 1px;",
                "left-px" => "inset-inline-start: 1px;",
                "inset-0" => "inset: 0;",
                "inset-x-0" => "inset-inline: 0;",
                "inset-y-0" => "inset-block: 0;",
                "start-0" => "inset-inline-start: 0;",
                "end-0" => "inset-inline-end: 0;",
                "top-0" => "inset-block-start: 0;",
                "right-0" => "inset-inline-end: 0;",
                "bottom-0" => "inset-block-end: 0;",
                "left-0" => "inset-inline-start: 0;",
                "inset-0.5" => "inset: 0.125rem;",
                "inset-x-0.5" => "inset-inline: 0.125rem;",
                "inset-y-0.5" => "inset-block: 0.125rem;",
                "start-0.5" => "inset-inline-start: 0.125rem;",
                "end-0.5" => "inset-inline-end: 0.125rem;",
                "top-0.5" => "inset-block-start: 0.125rem;",
                "right-0.5" => "inset-inline-end: 0.125rem;",
                "bottom-0.5" => "inset-block-end: 0.125rem;",
                "left-0.5" => "inset-inline-start: 0.125rem;",
                "inset-1" => "inset: 0.25rem;",
                "inset-x-1" => "inset-inline: 0.25rem;",
                "inset-y-1" => "inset-block: 0.25rem;",
                "start-1" => "inset-inline-start: 0.25rem;",
                "end-1" => "inset-inline-end: 0.25rem;",
                "top-1" => "inset-block-start: 0.25rem;",
                "right-1" => "inset-inline-end: 0.25rem;",
                "bottom-1" => "inset-block-end: 0.25rem;",
                "left-1" => "inset-inline-start: 0.25rem;",
                "inset-1.5" => "inset: 0.375rem;",
                "inset-x-1.5" => "inset-inline: 0.375rem;",
                "inset-y-1.5" => "inset-block: 0.375rem;",
                "start-1.5" => "inset-inline-start: 0.375rem;",
                "end-1.5" => "inset-inline-end: 0.375rem;",
                "top-1.5" => "inset-block-start: 0.375rem;",
                "right-1.5" => "inset-inline-end: 0.375rem;",
                "bottom-1.5" => "inset-block-end: 0.375rem;",
                "left-1.5" => "inset-inline-start: 0.375rem;",
                "inset-2" => "inset: 0.5rem;",
                "inset-x-2" => "inset-inline: 0.5rem;",
                "inset-y-2" => "inset-block: 0.5rem;",
                "start-2" => "inset-inline-start: 0.5rem;",
                "end-2" => "inset-inline-end: 0.5rem;",
                "top-2" => "inset-block-start: 0.5rem;",
                "right-2" => "inset-inline-end: 0.5rem;",
                "bottom-2" => "inset-block-end: 0.5rem;",
                "left-2" => "inset-inline-start: 0.5rem;",
                "inset-2.5" => "inset: 0.625rem;",
                "inset-x-2.5" => "inset-inline: 0.625rem;",
                "inset-y-2.5" => "inset-block: 0.625rem;",
                "start-2.5" => "inset-inline-start: 0.625rem;",
                "end-2.5" => "inset-inline-end: 0.625rem;",
                "top-2.5" => "inset-block-start: 0.625rem;",
                "right-2.5" => "inset-inline-end: 0.625rem;",
                "bottom-2.5" => "inset-block-end: 0.625rem;",
                "left-2.5" => "inset-inline-start: 0.625rem;",
                "inset-3" => "inset: 0.75rem;",
                "inset-x-3" => "inset-inline: 0.75rem;",
                "inset-y-3" => "inset-block: 0.75rem;",
                "start-3" => "inset-inline-start: 0.75rem;",
                "end-3" => "inset-inline-end: 0.75rem;",
                "top-3" => "inset-block-start: 0.75rem;",
                "right-3" => "inset-inline-end: 0.75rem;",
                "bottom-3" => "inset-block-end: 0.75rem;",
                "left-3" => "inset-inline-start: 0.75rem;",
                "inset-3.5" => "inset: 0.875rem;",
                "inset-x-3.5" => "inset-inline: 0.875rem;",
                "inset-y-3.5" => "inset-block: 0.875rem;",
                "start-3.5" => "inset-inline-start: 0.875rem;",
                "end-3.5" => "inset-inline-end: 0.875rem;",
                "top-3.5" => "inset-block-start: 0.875rem;",
                "right-3.5" => "inset-inline-end: 0.875rem;",
                "bottom-3.5" => "inset-block-end: 0.875rem;",
                "left-3.5" => "inset-inline-start: 0.875rem;",
                "inset-4" => "inset: 1rem;",
                "inset-x-4" => "inset-inline: 1rem;",
                "inset-y-4" => "inset-block: 1rem;",
                "start-4" => "inset-inline-start: 1rem;",
                "end-4" => "inset-inline-end: 1rem;",
                "top-4" => "inset-block-start: 1rem;",
                "right-4" => "inset-inline-end: 1rem;",
                "bottom-4" => "inset-block-end: 1rem;",
                "left-4" => "inset-inline-start: 1rem;",
                "inset-5" => "inset: 1.25rem;",
                "inset-x-5" => "inset-inline: 1.25rem;",
                "inset-y-5" => "inset-block: 1.25rem;",
                "start-5" => "inset-inline-start: 1.25rem;",
                "end-5" => "inset-inline-end: 1.25rem;",
                "top-5" => "inset-block-start: 1.25rem;",
                "right-5" => "inset-inline-end: 1.25rem;",
                "bottom-5" => "inset-block-end: 1.25rem;",
                "left-5" => "inset-inline-start: 1.25rem;",
                "inset-6" => "inset: 1.5rem;",
                "inset-x-6" => "inset-inline: 1.5rem;",
                "inset-y-6" => "inset-block: 1.5rem;",
                "start-6" => "inset-inline-start: 1.5rem;",
                "end-6" => "inset-inline-end: 1.5rem;",
                "top-6" => "inset-block-start: 1.5rem;",
                "right-6" => "inset-inline-end: 1.5rem;",
                "bottom-6" => "inset-block-end: 1.5rem;",
                "left-6" => "inset-inline-start: 1.5rem;",
                "inset-7" => "inset: 1.75rem;",
                "inset-x-7" => "inset-inline: 1.75rem;",
                "inset-y-7" => "inset-block: 1.75rem;",
                "start-7" => "inset-inline-start: 1.75rem;",
                "end-7" => "inset-inline-end: 1.75rem;",
                "top-7" => "inset-block-start: 1.75rem;",
                "right-7" => "inset-inline-end: 1.75rem;",
                "bottom-7" => "inset-block-end: 1.75rem;",
                "left-7" => "inset-inline-start: 1.75rem;",
                "inset-8" => "inset: 2rem;",
                "inset-x-8" => "inset-inline: 2rem;",
                "inset-y-8" => "inset-block: 2rem;",
                "start-8" => "inset-inline-start: 2rem;",
                "end-8" => "inset-inline-end: 2rem;",
                "top-8" => "inset-block-start: 2rem;",
                "right-8" => "inset-inline-end: 2rem;",
                "bottom-8" => "inset-block-end: 2rem;",
                "left-8" => "inset-inline-start: 2rem;",
                "inset-9" => "inset: 2.25rem;",
                "inset-x-9" => "inset-inline: 2.25rem;",
                "inset-y-9" => "inset-block: 2.25rem;",
                "start-9" => "inset-inline-start: 2.25rem;",
                "end-9" => "inset-inline-end: 2.25rem;",
                "top-9" => "inset-block-start: 2.25rem;",
                "right-9" => "inset-inline-end: 2.25rem;",
                "bottom-9" => "inset-block-end: 2.25rem;",
                "left-9" => "inset-inline-start: 2.25rem;",
                "inset-10" => "inset: 2.5rem;",
                "inset-x-10" => "inset-inline: 2.5rem;",
                "inset-y-10" => "inset-block: 2.5rem;",
                "start-10" => "inset-inline-start: 2.5rem;",
                "end-10" => "inset-inline-end: 2.5rem;",
                "top-10" => "inset-block-start: 2.5rem;",
                "right-10" => "inset-inline-end: 2.5rem;",
                "bottom-10" => "inset-block-end: 2.5rem;",
                "left-10" => "inset-inline-start: 2.5rem;",
                "inset-11" => "inset: 2.75rem;",
                "inset-x-11" => "inset-inline: 2.75rem;",
                "inset-y-11" => "inset-block: 2.75rem;",
                "start-11" => "inset-inline-start: 2.75rem;",
                "end-11" => "inset-inline-end: 2.75rem;",
                "top-11" => "inset-block-start: 2.75rem;",
                "right-11" => "inset-inline-end: 2.75rem;",
                "bottom-11" => "inset-block-end: 2.75rem;",
                "left-11" => "inset-inline-start: 2.75rem;",
                "inset-12" => "inset: 3rem;",
                "inset-x-12" => "inset-inline: 3rem;",
                "inset-y-12" => "inset-block: 3rem;",
                "start-12" => "inset-inline-start: 3rem;",
                "end-12" => "inset-inline-end: 3rem;",
                "top-12" => "inset-block-start: 3rem;",
                "right-12" => "inset-inline-end: 3rem;",
                "bottom-12" => "inset-block-end: 3rem;",
                "left-12" => "inset-inline-start: 3rem;",
                "inset-14" => "inset: 3.5rem;",
                "inset-x-14" => "inset-inline: 3.5rem;",
                "inset-y-14" => "inset-block: 3.5rem;",
                "start-14" => "inset-inline-start: 3.5rem;",
                "end-14" => "inset-inline-end: 3.5rem;",
                "top-14" => "inset-block-start: 3.5rem;",
                "right-14" => "inset-inline-end: 3.5rem;",
                "bottom-14" => "inset-block-end: 3.5rem;",
                "left-14" => "inset-inline-start: 3.5rem;",
                "inset-16" => "inset: 4rem;",
                "inset-x-16" => "inset-inline: 4rem;",
                "inset-y-16" => "inset-block: 4rem;",
                "start-16" => "inset-inline-start: 4rem;",
                "end-16" => "inset-inline-end: 4rem;",
                "top-16" => "inset-block-start: 4rem;",
                "right-16" => "inset-inline-end: 4rem;",
                "bottom-16" => "inset-block-end: 4rem;",
                "left-16" => "inset-inline-start: 4rem;",
                "inset-20" => "inset: 5rem;",
                "inset-x-20" => "inset-inline: 5rem;",
                "inset-y-20" => "inset-block: 5rem;",
                "start-20" => "inset-inline-start: 5rem;",
                "end-20" => "inset-inline-end: 5rem;",
                "top-20" => "inset-block-start: 5rem;",
                "right-20" => "inset-inline-end: 5rem;",
                "bottom-20" => "inset-block-end: 5rem;",
                "left-20" => "inset-inline-start: 5rem;",
                "inset-24" => "inset: 6rem;",
                "inset-x-24" => "inset-inline: 6rem;",
                "inset-y-24" => "inset-block: 6rem;",
                "start-24" => "inset-inline-start: 6rem;",
                "end-24" => "inset-inline-end: 6rem;",
                "top-24" => "inset-block-start: 6rem;",
                "right-24" => "inset-inline-end: 6rem;",
                "bottom-24" => "inset-block-end: 6rem;",
                "left-24" => "inset-inline-start: 6rem;",
                "inset-28" => "inset: 7rem;",
                "inset-x-28" => "inset-inline: 7rem;",
                "inset-y-28" => "inset-block: 7rem;",
                "start-28" => "inset-inline-start: 7rem;",
                "end-28" => "inset-inline-end: 7rem;",
                "top-28" => "inset-block-start: 7rem;",
                "right-28" => "inset-inline-end: 7rem;",
                "bottom-28" => "inset-block-end: 7rem;",
                "left-28" => "inset-inline-start: 7rem;",
                "inset-32" => "inset: 8rem;",
                "inset-x-32" => "inset-inline: 8rem;",
                "inset-y-32" => "inset-block: 8rem;",
                "start-32" => "inset-inline-start: 8rem;",
                "end-32" => "inset-inline-end: 8rem;",
                "top-32" => "inset-block-start: 8rem;",
                "right-32" => "inset-inline-end: 8rem;",
                "bottom-32" => "inset-block-end: 8rem;",
                "left-32" => "inset-inline-start: 8rem;",
                "inset-36" => "inset: 9rem;",
                "inset-x-36" => "inset-inline: 9rem;",
                "inset-y-36" => "inset-block: 9rem;",
                "start-36" => "inset-inline-start: 9rem;",
                "end-36" => "inset-inline-end: 9rem;",
                "top-36" => "inset-block-start: 9rem;",
                "right-36" => "inset-inline-end: 9rem;",
                "bottom-36" => "inset-block-end: 9rem;",
                "left-36" => "inset-inline-start: 9rem;",
                "inset-44" => "inset: 11rem;",
                "inset-x-44" => "inset-inline: 11rem;",
                "inset-y-44" => "inset-block: 11rem;",
                "start-44" => "inset-inline-start: 11rem;",
                "end-44" => "inset-inline-end: 11rem;",
                "top-44" => "inset-block-start: 11rem;",
                "right-44" => "inset-inline-end: 11rem;",
                "bottom-44" => "inset-block-end: 11rem;",
                "left-44" => "inset-inline-start: 11rem;",
                "inset-48" => "inset: 12rem;",
                "inset-x-48" => "inset-inline: 12rem;",
                "inset-y-48" => "inset-block: 12rem;",
                "start-48" => "inset-inline-start: 12rem;",
                "end-48" => "inset-inline-end: 12rem;",
                "top-48" => "inset-block-start: 12rem;",
                "right-48" => "inset-inline-end: 12rem;",
                "bottom-48" => "inset-block-end: 12rem;",
                "left-48" => "inset-inline-start: 12rem;",
                "inset-52" => "inset: 13rem;",
                "inset-x-52" => "inset-inline: 13rem;",
                "inset-y-52" => "inset-block: 13rem;",
                "start-52" => "inset-inline-start: 13rem;",
                "end-52" => "inset-inline-end: 13rem;",
                "top-52" => "inset-block-start: 13rem;",
                "right-52" => "inset-inline-end: 13rem;",
                "bottom-52" => "inset-block-end: 13rem;",
                "left-52" => "inset-inline-start: 13rem;",
                "inset-56" => "inset: 14rem;",
                "inset-x-56" => "inset-inline: 14rem;",
                "inset-y-56" => "inset-block: 14rem;",
                "start-56" => "inset-inline-start: 14rem;",
                "end-56" => "inset-inline-end: 14rem;",
                "top-56" => "inset-block-start: 14rem;",
                "right-56" => "inset-inline-end: 14rem;",
                "bottom-56" => "inset-block-end: 14rem;",
                "left-56" => "inset-inline-start: 14rem;",
                "inset-60" => "inset: 15rem;",
                "inset-x-60" => "inset-inline: 15rem;",
                "inset-y-60" => "inset-block: 15rem;",
                "start-60" => "inset-inline-start: 15rem;",
                "end-60" => "inset-inline-end: 15rem;",
                "top-60" => "inset-block-start: 15rem;",
                "right-60" => "inset-inline-end: 15rem;",
                "bottom-60" => "inset-block-end: 15rem;",
                "left-60" => "inset-inline-start: 15rem;",
                "inset-64" => "inset: 16rem;",
                "inset-x-64" => "inset-inline: 16rem;",
                "inset-y-64" => "inset-block: 16rem;",
                "start-64" => "inset-inline-start: 16rem;",
                "end-64" => "inset-inline-end: 16rem;",
                "top-64" => "inset-block-start: 16rem;",
                "right-64" => "inset-inline-end: 16rem;",
                "bottom-64" => "inset-block-end: 16rem;",
                "left-64" => "inset-inline-start: 16rem;",
                "inset-72" => "inset: 18rem;",
                "inset-x-72" => "inset-inline: 18rem;",
                "inset-y-72" => "inset-block: 18rem;",
                "start-72" => "inset-inline-start: 18rem;",
                "end-72" => "inset-inline-end: 18rem;",
                "top-72" => "inset-block-start: 18rem;",
                "right-72" => "inset-inline-end: 18rem;",
                "bottom-72" => "inset-block-end: 18rem;",
                "left-72" => "inset-inline-start: 18rem;",
                "inset-80" => "inset: 20rem;",
                "inset-x-80" => "inset-inline: 20rem;",
                "inset-y-80" => "inset-block: 20rem;",
                "start-80" => "inset-inline-start: 20rem;",
                "end-80" => "inset-inline-end: 20rem;",
                "top-80" => "inset-block-start: 20rem;",
                "right-80" => "inset-inline-end: 20rem;",
                "bottom-80" => "inset-block-end: 20rem;",
                "left-80" => "inset-inline-start: 20rem;",
                "inset-96" => "inset: 24rem;",
                "inset-x-96" => "inset-inline: 24rem;",
                "inset-y-96" => "inset-block: 24rem;",
                "start-96" => "inset-inline-start: 24rem;",
                "end-96" => "inset-inline-end: 24rem;",
                "top-96" => "inset-block-start: 24rem;",
                "right-96" => "inset-inline-end: 24rem;",
                "bottom-96" => "inset-block-end: 24rem;",
                "left-96" => "inset-inline-start: 24rem;",
                "inset-auto" => "inset: auto;",
                "inset-1/2" => "inset: 50%;",
                "inset-1/3" => "inset: 33.33333%;",
                "inset-2/3" => "inset: 66.66667%;",
                "inset-1/4" => "inset: 25%;",
                "inset-2/4" => "inset: 50%;",
                "inset-3/4" => "inset: 75%;",
                "inset-full" => "inset: 100%;",
                "inset-x-auto" => "inset-inline: auto;",
                "inset-x-1/2" => "inset-inline: 50%;",
                "inset-x-1/3" => "inset-inline: 33.33333%;",
                "inset-x-2/3" => "inset-inline: 66.66667%;",
                "inset-x-1/4" => "inset-inline: 25%;",
                "inset-x-2/4" => "inset-inline: 50%;",
                "inset-x-3/4" => "inset-inline: 75%;",
                "inset-x-full" => "inset-inline: 100%;",
                "inset-y-auto" => "inset-block: auto;",
                "inset-y-1/2" => "inset-block: 50%;",
                "inset-y-1/3" => "inset-block: 33.33333%;",
                "inset-y-2/3" => "inset-block: 66.66667%;",
                "inset-y-1/4" => "inset-block: 25%;",
                "inset-y-2/4" => "inset-block: 50%;",
                "inset-y-3/4" => "inset-block: 75%;",
                "inset-y-full" => "inset-block: 100%;",
                "start-auto" => "inset-inline-start: auto;",
                "start-1/2" => "inset-inline-start: 50%;",
                "start-1/3" => "inset-inline-start: 33.33333%;",
                "start-2/3" => "inset-inline-start: 66.66667%;",
                "start-1/4" => "inset-inline-start: 25%;",
                "start-2/4" => "inset-inline-start: 50%;",
                "start-3/4" => "inset-inline-start: 75%;",
                "start-full" => "inset-inline-start: 100%;",
                "end-auto" => "inset-inline-end: auto;",
                "end-1/2" => "inset-inline-end: 50%;",
                "end-1/3" => "inset-inline-end: 33.33333%;",
                "end-2/3" => "inset-inline-end: 66.66667%;",
                "end-1/4" => "inset-inline-end: 25%;",
                "end-2/4" => "inset-inline-end: 50%;",
                "end-3/4" => "inset-inline-end: 75%;",
                "end-full" => "inset-inline-end: 100%;",
                "top-auto" => "inset-block-start: auto;",
                "top-1/2" => "inset-block-start: 50%;",
                "top-1/3" => "inset-block-start: 33.33333%;",
                "top-2/3" => "inset-block-start: 66.66667%;",
                "top-1/4" => "inset-block-start: 25%;",
                "top-2/4" => "inset-block-start: 50%;",
                "top-3/4" => "inset-block-start: 75%;",
                "top-full" => "inset-block-start: 100%;",
                "right-auto" => "inset-inline-end: auto;",
                "right-1/2" => "inset-inline-end: 50%;",
                "right-1/3" => "inset-inline-end: 33.33333%;",
                "right-2/3" => "inset-inline-end: 66.66667%;",
                "right-1/4" => "inset-inline-end: 25%;",
                "right-2/4" => "inset-inline-end: 50%;",
                "right-3/4" => "inset-inline-end: 75%;",
                "right-full" => "inset-inline-end: 100%;",
                "bottom-auto" => "inset-block-end: auto;",
                "bottom-1/2" => "inset-block-end: 50%;",
                "bottom-1/3" => "inset-block-end: 33.33333%;",
                "bottom-2/3" => "inset-block-end: 66.66667%;",
                "bottom-1/4" => "inset-block-end: 25%;",
                "bottom-2/4" => "inset-block-end: 50%;",
                "bottom-3/4" => "inset-block-end: 75%;",
                "bottom-full" => "inset-block-end: 100%;",
            ],

            "visibility" => [
                "visible" => "visibility: visible;",
                "invisible" => "visibility: invisible;",
                "collapse" => "visibility: collapse;",
            ],

            "z-index" => [
                "z-0" => "z-index: 0;",
                "z-10" => "z-index: 10;",
                "z-20" => "z-index: 20;",
                "z-30" => "z-index: 30;",
                "z-40" => "z-index: 40;",
                "z-50" => "z-index: 50;",
                "z-auto" => "z-index: auto;",
            ],
        ];

        $this->createStyles('Layout', $layout);

        $flexbox_and_grid = [
            "flex-basis" => [
                "basis-0" => "flex-basis: 0;",
                "basis-1" => "flex-basis: 0.25rem;",
                "basis-2" => "flex-basis: 0.5rem;",
                "basis-3" => "flex-basis: 0.75rem;",
                "basis-4" => "flex-basis: 1rem;",
                "basis-5" => "flex-basis: 1.25rem;",
                "basis-6" => "flex-basis: 1.5rem;",
                "basis-7" => "flex-basis: 1.75rem;",
                "basis-8" => "flex-basis: 2rem;",
                "basis-9" => "flex-basis: 2.25rem;",
                "basis-10" => "flex-basis: 2.5rem;",
                "basis-11" => "flex-basis: 2.75rem;",
                "basis-12" => "flex-basis: 3rem;",
                "basis-14" => "flex-basis: 3.5rem;",
                "basis-16" => "flex-basis: 4rem;",
                "basis-20" => "flex-basis: 5rem;",
                "basis-24" => "flex-basis: 6rem;",
                "basis-28" => "flex-basis: 7rem;",
                "basis-32" => "flex-basis: 8rem;",
                "basis-36" => "flex-basis: 9rem;",
                "basis-40" => "flex-basis: 10rem;",
                "basis-44" => "flex-basis: 11rem;",
                "basis-48" => "flex-basis: 12rem;",
                "basis-52" => "flex-basis: 13rem;",
                "basis-56" => "flex-basis: 14rem;",
                "basis-60" => "flex-basis: 15rem;",
                "basis-64" => "flex-basis: 16rem;",
                "basis-72" => "flex-basis: 18rem;",
                "basis-80" => "flex-basis: 20rem;",
                "basis-96" => "flex-basis: 24rem;",
                "basis-auto" => "flex-basis: auto;",
                "basis-px" => "flex-basis: 1px;",
                "basis-0.5" => "flex-basis: 0.125rem;",
                "basis-1.5" => "flex-basis: 0.375rem;",
                "basis-2.5" => "flex-basis: 0.625rem;",
                "basis-3.5" => "flex-basis: 0.875rem;",
                "basis-1/2" => "flex-basis: 50%;",
                "basis-1/3" => "flex-basis: 33.3333%;",
                "basis-2/3" => "flex-basis: 66.6667%;",
                "basis-1/4" => "flex-basis: 25%;",
                "basis-2/4" => "flex-basis: 50%;",
                "basis-3/4" => "flex-basis: 75%;",
                "basis-1/5" => "flex-basis: 20%;",
                "basis-2/5" => "flex-basis: 40%;",
                "basis-3/5" => "flex-basis: 60%;",
                "basis-4/5" => "flex-basis: 80%;",
                "basis-1/6" => "flex-basis: 16.6667%;",
                "basis-2/6" => "flex-basis: 33.3333%;",
                "basis-3/6" => "flex-basis: 50%;",
                "basis-4/6" => "flex-basis: 66.6667%;",
                "basis-5/6" => "flex-basis: 83.3333%;",
                "basis-1/12" => "flex-basis: 8.3333%;",
                "basis-2/12" => "flex-basis: 16.6667%;",
                "basis-3/12" => "flex-basis: 25%;",
                "basis-4/12" => "flex-basis: 33.3333%;",
                "basis-5/12" => "flex-basis: 41.6667%;",
                "basis-6/12" => "flex-basis: 50%;",
                "basis-7/12" => "flex-basis: 58.3333%;",
                "basis-8/12" => "flex-basis: 66.6667%;",
                "basis-9/12" => "flex-basis: 75%;",
                "basis-10/12" => "flex-basis: 83.3333%;",
                "basis-11/12" => "flex-basis: 91.6667%;",
                "basis-full" => "flex-basis: 100%;",
            ],

            "flex-direction" => [
                "flex-row" => "flex-direction: row;",
                "flex-row-reverse" => "flex-direction: row-reverse;",
                "flex-col" => "flex-direction: column;",
                "flex-col-reverse" => "flex-direction: column-reverse;",
            ],

            "flex-wrap" => [
                "flex-wrap" => "flex-wrap: wrap;",
                "flex-wrap-reverse" => "flex-wrap: wrap-reverse;",
                "flex-nowrap" => "flex-wrap: nowrap;",
            ],

            "flex" => [
                "flex-1" => "flex: 1 1 0%;",
                "flex-auto" => "flex: 1 1 auto;",
                "flex-initial" => "flex: 0 1 auto;",
                "flex-none" => "flex: none;",
            ],

            "flex-grow" => [
                "grow" => "flex-grow: 1;",
                "grow-0" => "flex-grow: 0;",
            ],

            "flex-shrink" => [
                "shrink" => "flex-shrink: 1;",
                "shrink-0" => "flex-shrink: 0;",
            ],

            "order" => [
                "order-1" => "order: 1;",
                "order-2" => "order: 2;",
                "order-3" => "order: 3;",
                "order-4" => "order: 4;",
                "order-5" => "order: 5;",
                "order-6" => "order: 6;",
                "order-7" => "order: 7;",
                "order-8" => "order: 8;",
                "order-9" => "order: 9;",
                "order-10" => "order: 10;",
                "order-11" => "order: 11;",
                "order-12" => "order: 12;",
                "order-first" => "order: -9999;",
                "order-last" => "order: 9999;",
                "order-none" => "order: 0;",
            ],

            "grid-template-columns" => [
                "grid-cols-1" => "grid-template-columns: repeat(1, minmax(0, 1fr));",
                "grid-cols-2" => "grid-template-columns: repeat(2, minmax(0, 1fr));",
                "grid-cols-3" => "grid-template-columns: repeat(3, minmax(0, 1fr));",
                "grid-cols-4" => "grid-template-columns: repeat(4, minmax(0, 1fr));",
                "grid-cols-5" => "grid-template-columns: repeat(5, minmax(0, 1fr));",
                "grid-cols-6" => "grid-template-columns: repeat(6, minmax(0, 1fr));",
                "grid-cols-7" => "grid-template-columns: repeat(7, minmax(0, 1fr));",
                "grid-cols-8" => "grid-template-columns: repeat(8, minmax(0, 1fr));",
                "grid-cols-9" => "grid-template-columns: repeat(9, minmax(0, 1fr));",
                "grid-cols-10" => "grid-template-columns: repeat(10, minmax(0, 1fr));",
                "grid-cols-11" => "grid-template-columns: repeat(11, minmax(0, 1fr));",
                "grid-cols-12" => "grid-template-columns: repeat(12, minmax(0, 1fr));",
                "grid-cols-none" => "grid-template-columns: none;",
            ],

            "grid-column-start-end" => [
                "col-auto" => "grid-column: auto;",
                "col-span-1" => "grid-column: span 1 / span 1;",
                "col-span-2" => "grid-column: span 2 / span 2;",
                "col-span-3" => "grid-column: span 3 / span 3;",
                "col-span-4" => "grid-column: span 4 / span 4;",
                "col-span-5" => "grid-column: span 5 / span 5;",
                "col-span-6" => "grid-column: span 6 / span 6;",
                "col-span-7" => "grid-column: span 7 / span 7;",
                "col-span-8" => "grid-column: span 8 / span 8;",
                "col-span-9" => "grid-column: span 9 / span 9;",
                "col-span-10" => "grid-column: span 10 / span 10;",
                "col-span-11" => "grid-column: span 11 / span 11;",
                "col-span-12" => "grid-column: span 12 / span 12;",
                "col-span-full" => "grid-column: span 12 / span 12;",
                "col-start-1" => "grid-column-start: 1;",
                "col-start-2" => "grid-column-start: 2;",
                "col-start-3" => "grid-column-start: 3;",
                "col-start-4" => "grid-column-start: 4;",
                "col-start-5" => "grid-column-start: 5;",
                "col-start-6" => "grid-column-start: 6;",
                "col-start-7" => "grid-column-start: 7;",
                "col-start-8" => "grid-column-start: 8;",
                "col-start-9" => "grid-column-start: 9;",
                "col-start-10" => "grid-column-start: 10;",
                "col-start-11" => "grid-column-start: 11;",
                "col-start-12" => "grid-column-start: 12;",
                "col-start-13" => "grid-column-start: 13;",
                "col-start-auto" => "grid-column-start: auto;",
                "col-end-1" => "grid-column-end: 1;",
                "col-end-2" => "grid-column-end: 2;",
                "col-end-3" => "grid-column-end: 3;",
                "col-end-4" => "grid-column-end: 4;",
                "col-end-5" => "grid-column-end: 5;",
                "col-end-6" => "grid-column-end: 6;",
                "col-end-7" => "grid-column-end: 7;",
                "col-end-8" => "grid-column-end: 8;",
                "col-end-9" => "grid-column-end: 9;",
                "col-end-10" => "grid-column-end: 10;",
                "col-end-11" => "grid-column-end: 11;",
                "col-end-12" => "grid-column-end: 12;",
                "col-end-13" => "grid-column-end: 13;",
                "col-end-auto" => "grid-column-end: auto;",
            ],

            "grid-template-rows" => [
                "grid-rows-1" => "grid-template-rows: repeat(1, minmax(0, 1fr));",
                "grid-rows-2" => "grid-template-rows: repeat(2, minmax(0, 1fr));",
                "grid-rows-3" => "grid-template-rows: repeat(3, minmax(0, 1fr));",
                "grid-rows-4" => "grid-template-rows: repeat(4, minmax(0, 1fr));",
                "grid-rows-5" => "grid-template-rows: repeat(5, minmax(0, 1fr));",
                "grid-rows-6" => "grid-template-rows: repeat(6, minmax(0, 1fr));",
                "grid-rows-none" => "grid-template-rows: none;",
            ],

            "grid-row-start-end" => [
                "row-auto" => "grid-row: auto;",
                "row-span-1" => "grid-row: span 1 / span 1;",
                "row-span-2" => "grid-row: span 2 / span 2;",
                "row-span-3" => "grid-row: span 3 / span 3;",
                "row-span-4" => "grid-row: span 4 / span 4;",
                "row-span-5" => "grid-row: span 5 / span 5;",
                "row-span-6" => "grid-row: span 6 / span 6;",
                "row-span-full" => "grid-row: span 6 / span 6;",
                "row-start-1" => "grid-row-start: 1;",
                "row-start-2" => "grid-row-start: 2;",
                "row-start-3" => "grid-row-start: 3;",
                "row-start-4" => "grid-row-start: 4;",
                "row-start-5" => "grid-row-start: 5;",
                "row-start-6" => "grid-row-start: 6;",
                "row-start-7" => "grid-row-start: 7;",
                "row-start-auto" => "grid-row-start: auto;",
                "row-end-1" => "grid-row-end: 1;",
                "row-end-2" => "grid-row-end: 2;",
                "row-end-3" => "grid-row-end: 3;",
                "row-end-4" => "grid-row-end: 4;",
                "row-end-5" => "grid-row-end: 5;",
                "row-end-6" => "grid-row-end: 6;",
                "row-end-7" => "grid-row-end: 7;",
                "row-end-auto" => "grid-row-end: auto;",
            ],

            "grid-auto-flow" => [
                "grid-flow-row" => "grid-auto-flow: row;",
                "grid-flow-col" => "grid-auto-flow: column;",
                "grid-flow-dense" => "grid-auto-flow: dense;",
                "grid-flow-row-dense" => "grid-auto-flow: row dense;",
                "grid-flow-col-dense" => "grid-auto-flow: column dense;",
            ],

            "grid-auto-columns" => [
                "auto-cols-auto" => "grid-auto-columns: auto;",
                "auto-cols-min" => "grid-auto-columns: min-content;",
                "auto-cols-max" => "grid-auto-columns: max-content;",
                "auto-cols-fr" => "grid-auto-columns: 1fr;",
            ],

            "grid-auto-rows" => [
                "auto-rows-auto" => "grid-auto-rows: auto;",
                "auto-rows-min" => "grid-auto-rows: min-content;",
                "auto-rows-max" => "grid-auto-rows: max-content;",
                "auto-rows-fr" => "grid-auto-rows: 1fr;",
            ],

            "gap" => [
                "gap-0" => "gap: 0;",
                "gap-px" => "gap: 1px;",
                "gap-0.5" => "gap: 0.125rem;",
                "gap-1" => "gap: 0.25rem;",
                "gap-1.5" => "gap: 0.375rem;",
                "gap-2" => "gap: 0.5rem;",
                "gap-2.5" => "gap: 0.625rem;",
                "gap-3" => "gap: 0.75rem;",
                "gap-3.5" => "gap: 0.875rem;",
                "gap-4" => "gap: 1rem;",
                "gap-5" => "gap: 1.25rem;",
                "gap-6" => "gap: 1.5rem;",
                "gap-7" => "gap: 1.75rem;",
                "gap-8" => "gap: 2rem;",
                "gap-9" => "gap: 2.25rem;",
                "gap-10" => "gap: 2.5rem;",
                "gap-11" => "gap: 2.75rem;",
                "gap-12" => "gap: 3rem;",
                "gap-14" => "gap: 3.5rem;",
                "gap-16" => "gap: 4rem;",
                "gap-20" => "gap: 5rem;",
                "gap-24" => "gap: 6rem;",
                "gap-28" => "gap: 7rem;",
                "gap-32" => "gap: 8rem;",
                "gap-36" => "gap: 9rem;",
                "gap-40" => "gap: 10rem;",
                "gap-44" => "gap: 11rem;",
                "gap-48" => "gap: 12rem;",
                "gap-52" => "gap: 13rem;",
                "gap-56" => "gap: 14rem;",
                "gap-60" => "gap: 15rem;",
                "gap-64" => "gap: 16rem;",
                "gap-72" => "gap: 18rem;",
                "gap-80" => "gap: 20rem;",
                "gap-96" => "gap: 24rem;",
                "gap-x-0" => "column-gap: 0;",
                "gap-x-px" => "column-gap: 1px;",
                "gap-x-0.5" => "column-gap: 0.125rem;",
                "gap-x-1" => "column-gap: 0.25rem;",
                "gap-x-1.5" => "column-gap: 0.375rem;",
                "gap-x-2" => "column-gap: 0.5rem;",
                "gap-x-2.5" => "column-gap: 0.625rem;",
                "gap-x-3" => "column-gap: 0.75rem;",
                "gap-x-3.5" => "column-gap: 0.875rem;",
                "gap-x-4" => "column-gap: 1rem;",
                "gap-x-5" => "column-gap: 1.25rem;",
                "gap-x-6" => "column-gap: 1.5rem;",
                "gap-x-7" => "column-gap: 1.75rem;",
                "gap-x-8" => "column-gap: 2rem;",
                "gap-x-9" => "column-gap: 2.25rem;",
                "gap-x-10" => "column-gap: 2.5rem;",
                "gap-x-11" => "column-gap: 2.75rem;",
                "gap-x-12" => "column-gap: 3rem;",
                "gap-x-14" => "column-gap: 3.5rem;",
                "gap-x-16" => "column-gap: 4rem;",
                "gap-x-20" => "column-gap: 5rem;",
                "gap-x-24" => "column-gap: 6rem;",
                "gap-x-28" => "column-gap: 7rem;",
                "gap-x-32" => "column-gap: 8rem;",
                "gap-x-36" => "column-gap: 9rem;",
                "gap-x-40" => "column-gap: 10rem;",
                "gap-x-44" => "column-gap: 11rem;",
                "gap-x-48" => "column-gap: 12rem;",
                "gap-x-52" => "column-gap: 13rem;",
                "gap-x-56" => "column-gap: 14rem;",
                "gap-x-60" => "column-gap: 15rem;",
                "gap-x-64" => "column-gap: 16rem;",
                "gap-x-72" => "column-gap: 18rem;",
                "gap-x-80" => "column-gap: 20rem;",
                "gap-x-96" => "column-gap: 24rem;",
                "gap-y-0" => "row-gap: 0;",
                "gap-y-px" => "row-gap: 1px;",
                "gap-y-0.5" => "row-gap: 0.125rem;",
                "gap-y-1" => "row-gap: 0.25rem;",
                "gap-y-1.5" => "row-gap: 0.375rem;",
                "gap-y-2" => "row-gap: 0.5rem;",
                "gap-y-2.5" => "row-gap: 0.625rem;",
                "gap-y-3" => "row-gap: 0.75rem;",
                "gap-y-3.5" => "row-gap: 0.875rem;",
                "gap-y-4" => "row-gap: 1rem;",
                "gap-y-5" => "row-gap: 1.25rem;",
                "gap-y-6" => "row-gap: 1.5rem;",
                "gap-y-7" => "row-gap: 1.75rem;",
                "gap-y-8" => "row-gap: 2rem;",
                "gap-y-9" => "row-gap: 2.25rem;",
                "gap-y-10" => "row-gap: 2.5rem;",
                "gap-y-11" => "row-gap: 2.75rem;",
                "gap-y-12" => "row-gap: 3rem;",
                "gap-y-14" => "row-gap: 3.5rem;",
                "gap-y-16" => "row-gap: 4rem;",
                "gap-y-20" => "row-gap: 5rem;",
                "gap-y-24" => "row-gap: 6rem;",
                "gap-y-28" => "row-gap: 7rem;",
                "gap-y-32" => "row-gap: 8rem;",
                "gap-y-36" => "row-gap: 9rem;",
                "gap-y-40" => "row-gap: 10rem;",
                "gap-y-44" => "row-gap: 11rem;",
                "gap-y-48" => "row-gap: 12rem;",
                "gap-y-52" => "row-gap: 13rem;",
                "gap-y-56" => "row-gap: 14rem;",
                "gap-y-60" => "row-gap: 15rem;",
                "gap-y-64" => "row-gap: 16rem;",
                "gap-y-72" => "row-gap: 18rem;",
                "gap-y-80" => "row-gap: 20rem;",
                "gap-y-96" => "row-gap: 24rem;",
            ],

            "justify-content" => [
                "justify-normal" => "justify-content: normal;",
                "justify-start" => "justify-content: flex-start;",
                "justify-end" => "justify-content: flex-end;",
                "justify-center" => "justify-content: center;",
                "justify-between" => "justify-content: space-between;",
                "justify-around" => "justify-content: space-around;",
                "justify-evenly" => "justify-content: space-evenly;",
                "justify-stretch" => "justify-content: stretch;",
            ],

            "justify-items" => [
                "justify-items-start" => "justify-items: start;",
                "justify-items-end" => "justify-items: end;",
                "justify-items-center" => "justify-items: center;",
                "justify-items-stretch" => "justify-items: stretch;",
            ],

            "justify-self" => [
                "justify-self-auto" => "justify-self: auto;",
                "justify-self-start" => "justify-self: start;",
                "justify-self-end" => "justify-self: end;",
                "justify-self-center" => "justify-self: center;",
                "justify-self-stretch" => "justify-self: stretch;",
            ],

            "align-content" => [
                "content-normal" => "align-content: normal;",
                "content-center" => "align-content: center;",
                "content-start" => "align-content: flex-start;",
                "content-end" => "align-content: flex-end;",
                "content-between" => "align-content: space-between;",
                "content-around" => "align-content: space-around;",
                "content-evenly" => "align-content: space-evenly;",
                "content-baseline" => "align-content: baseline;",
                "content-stretch" => "align-content: stretch;",
            ],

            "align-items" => [
                "items-start" => "align-items: flex-start;",
                "items-end" => "align-items: flex-end;",
                "items-center" => "align-items: center;",
                "items-baseline" => "align-items: baseline;",
                "items-stretch" => "align-items: stretch;",
            ],

            "align-self" => [
                "self-auto" => "align-self: auto;",
                "self-start" => "align-self: flex-start;",
                "self-end" => "align-self: flex-end;",
                "self-center" => "align-self: center;",
                "self-stretch" => "align-self: stretch;",
                "self-baseline" => "align-self: baseline;",
            ],

            "place-content" => [
                "place-content-center" => "place-content: center;",
                "place-content-start" => "place-content: flex-start;",
                "place-content-end" => "place-content: flex-end;",
                "place-content-between" => "place-content: space-between;",
                "place-content-around" => "place-content: space-around;",
                "place-content-evenly" => "place-content: space-evenly;",
                "place-content-baseline" => "place-content: baseline;",
                "place-content-stretch" => "place-content: stretch;",
            ],

            "place-items" => [
                "place-items-start" => "place-items: start;",
                "place-items-end" => "place-items: end;",
                "place-items-center" => "place-items: center;",
                "place-items-baseline" => "place-items: baseline;",
                "place-items-stretch" => "place-items: stretch;",
            ],

            "place-self" => [
                "place-self-auto" => "place-self: auto;",
                "place-self-start" => "place-self: start;",
                "place-self-end" => "place-self: end;",
                "place-self-center" => "place-self: center;",
                "place-self-stretch" => "place-self: stretch;",
            ],
        ];

        $this->createStyles('Flexbox & Grid', $flexbox_and_grid);

        $spacing = [
            "padding" => [
                "p-0" => "padding: 0;",
                "p-px" => "padding: 1px;",
                "p-0.5" => "padding: 0.125rem;",
                "p-1" => "padding: 0.25rem;",
                "p-1.5" => "padding: 0.375rem;",
                "p-2" => "padding: 0.5rem;",
                "p-2.5" => "padding: 0.625rem;",
                "p-3" => "padding: 0.75rem;",
                "p-3.5" => "padding: 0.875rem;",
                "p-4" => "padding: 1rem;",
                "p-5" => "padding: 1.25rem;",
                "p-6" => "padding: 1.5rem;",
                "p-7" => "padding: 1.75rem;",
                "p-8" => "padding: 2rem;",
                "p-9" => "padding: 2.25rem;",
                "p-10" => "padding: 2.5rem;",
                "p-11" => "padding: 2.75rem;",
                "p-12" => "padding: 3rem;",
                "p-14" => "padding: 3.5rem;",
                "p-16" => "padding: 4rem;",
                "p-20" => "padding: 5rem;",
                "p-24" => "padding: 6rem;",
                "p-28" => "padding: 7rem;",
                "p-32" => "padding: 8rem;",
                "p-36" => "padding: 9rem;",
                "p-40" => "padding: 10rem;",
                "p-44" => "padding: 11rem;",
                "p-48" => "padding: 12rem;",
                "p-52" => "padding: 13rem;",
                "p-56" => "padding: 14rem;",
                "p-60" => "padding: 15rem;",
                "p-64" => "padding: 16rem;",
                "p-72" => "padding: 18rem;",
                "p-80" => "padding: 20rem;",
                "p-96" => "padding: 24rem;",

                "px-0" => "padding-left: 0; padding-right: 0;",
                "px-px" => "padding-left: 1px; padding-right: 1px;",
                "px-0.5" => "padding-left: 0.125rem; padding-right: 0.125rem;",
                "px-1" => "padding-left: 0.25rem; padding-right: 0.25rem;",
                "px-1.5" => "padding-left: 0.375rem; padding-right: 0.375rem;",
                "px-2" => "padding-left: 0.5rem; padding-right: 0.5rem;",
                "px-2.5" => "padding-left: 0.625rem; padding-right: 0.625rem;",
                "px-3" => "padding-left: 0.75rem; padding-right: 0.75rem;",
                "px-3.5" => "padding-left: 0.875rem; padding-right: 0.875rem;",
                "px-4" => "padding-left: 1rem; padding-right: 1rem;",
                "px-5" => "padding-left: 1.25rem; padding-right: 1.25rem;",
                "px-6" => "padding-left: 1.5rem; padding-right: 1.5rem;",
                "px-7" => "padding-left: 1.75rem; padding-right: 1.75rem;",
                "px-8" => "padding-left: 2rem; padding-right: 2rem;",
                "px-9" => "padding-left: 2.25rem; padding-right: 2.25rem;",
                "px-10" => "padding-left: 2.5rem; padding-right: 2.5rem;",
                "px-11" => "padding-left: 2.75rem; padding-right: 2.75rem;",
                "px-12" => "padding-left: 3rem; padding-right: 3rem;",
                "px-14" => "padding-left: 3.5rem; padding-right: 3.5rem;",
                "px-16" => "padding-left: 4rem; padding-right: 4rem;",
                "px-20" => "padding-left: 5rem; padding-right: 5rem;",
                "px-24" => "padding-left: 6rem; padding-right: 6rem;",
                "px-28" => "padding-left: 7rem; padding-right: 7rem;",
                "px-32" => "padding-left: 8rem; padding-right: 8rem;",
                "px-36" => "padding-left: 9rem; padding-right: 9rem;",
                "px-40" => "padding-left: 10rem; padding-right: 10rem;",
                "px-44" => "padding-left: 11rem; padding-right: 11rem;",
                "px-48" => "padding-left: 12rem; padding-right: 12rem;",
                "px-52" => "padding-left: 13rem; padding-right: 13rem;",
                "px-56" => "padding-left: 14rem; padding-right: 14rem;",
                "px-60" => "padding-left: 15rem; padding-right: 15rem;",
                "px-64" => "padding-left: 16rem; padding-right: 16rem;",
                "px-72" => "padding-left: 18rem; padding-right: 18rem;",
                "px-80" => "padding-left: 20rem; padding-right: 20rem;",
                "px-96" => "padding-left: 24rem; padding-right: 24rem;",

                "py-0" => "padding-top: 0; padding-bottom: 0;",
                "py-px" => "padding-top: 1px; padding-bottom: 1px;",
                "py-0.5" => "padding-top: 0.125rem; padding-bottom: 0.125rem;",
                "py-1" => "padding-top: 0.25rem; padding-bottom: 0.25rem;",
                "py-1.5" => "padding-top: 0.375rem; padding-bottom: 0.375rem;",
                "py-2" => "padding-top: 0.5rem; padding-bottom: 0.5rem;",
                "py-2.5" => "padding-top: 0.625rem; padding-bottom: 0.625rem;",
                "py-3" => "padding-top: 0.75rem; padding-bottom: 0.75rem;",
                "py-3.5" => "padding-top: 0.875rem; padding-bottom: 0.875rem;",
                "py-4" => "padding-top: 1rem; padding-bottom: 1rem;",
                "py-5" => "padding-top: 1.25rem; padding-bottom: 1.25rem;",
                "py-6" => "padding-top: 1.5rem; padding-bottom: 1.5rem;",
                "py-7" => "padding-top: 1.75rem; padding-bottom: 1.75rem;",
                "py-8" => "padding-top: 2rem; padding-bottom: 2rem;",
                "py-9" => "padding-top: 2.25rem; padding-bottom: 2.25rem;",
                "py-10" => "padding-top: 2.5rem; padding-bottom: 2.5rem;",
                "py-11" => "padding-top: 2.75rem; padding-bottom: 2.75rem;",
                "py-12" => "padding-top: 3rem; padding-bottom: 3rem;",
                "py-14" => "padding-top: 3.5rem; padding-bottom: 3.5rem;",
                "py-16" => "padding-top: 4rem; padding-bottom: 4rem;",
                "py-20" => "padding-top: 5rem; padding-bottom: 5rem;",
                "py-24" => "padding-top: 6rem; padding-bottom: 6rem;",
                "py-28" => "padding-top: 7rem; padding-bottom: 7rem;",
                "py-32" => "padding-top: 8rem; padding-bottom: 8rem;",
                "py-36" => "padding-top: 9rem; padding-bottom: 9rem;",
                "py-40" => "padding-top: 10rem; padding-bottom: 10rem;",
                "py-44" => "padding-top: 11rem; padding-bottom: 11rem;",
                "py-48" => "padding-top: 12rem; padding-bottom: 12rem;",
                "py-52" => "padding-top: 13rem; padding-bottom: 13rem;",
                "py-56" => "padding-top: 14rem; padding-bottom: 14rem;",
                "py-60" => "padding-top: 15rem; padding-bottom: 15rem;",
                "py-64" => "padding-top: 16rem; padding-bottom: 16rem;",
                "py-72" => "padding-top: 18rem; padding-bottom: 18rem;",
                "py-80" => "padding-top: 20rem; padding-bottom: 20rem;",
                "py-96" => "padding-top: 24rem; padding-bottom: 24rem;",

                "ps-0" => "padding-left: 0;",
                "ps-px" => "padding-left: 1px;",
                "ps-0.5" => "padding-left: 0.125rem;",
                "ps-1" => "padding-left: 0.25rem;",
                "ps-1.5" => "padding-left: 0.375rem;",
                "ps-2" => "padding-left: 0.5rem;",
                "ps-2.5" => "padding-left: 0.625rem;",
                "ps-3" => "padding-left: 0.75rem;",
                "ps-3.5" => "padding-left: 0.875rem;",
                "ps-4" => "padding-left: 1rem;",
                "ps-5" => "padding-left: 1.25rem;",
                "ps-6" => "padding-left: 1.5rem;",
                "ps-7" => "padding-left: 1.75rem;",
                "ps-8" => "padding-left: 2rem;",
                "ps-9" => "padding-left: 2.25rem;",
                "ps-10" => "padding-left: 2.5rem;",
                "ps-11" => "padding-left: 2.75rem;",
                "ps-12" => "padding-left: 3rem;",
                "ps-14" => "padding-left: 3.5rem;",
                "ps-16" => "padding-left: 4rem;",
                "ps-20" => "padding-left: 5rem;",
                "ps-24" => "padding-left: 6rem;",
                "ps-28" => "padding-left: 7rem;",
                "ps-32" => "padding-left: 8rem;",
                "ps-36" => "padding-left: 9rem;",
                "ps-40" => "padding-left: 10rem;",
                "ps-44" => "padding-left: 11rem;",
                "ps-48" => "padding-left: 12rem;",
                "ps-52" => "padding-left: 13rem;",
                "ps-56" => "padding-left: 14rem;",
                "ps-60" => "padding-left: 15rem;",
                "ps-64" => "padding-left: 16rem;",
                "ps-72" => "padding-left: 18rem;",
                "ps-80" => "padding-left: 20rem;",
                "ps-96" => "padding-left: 24rem;",

                "pe-0" => "padding-right: 0;",
                "pe-px" => "padding-right: 1px;",
                "pe-0.5" => "padding-right: 0.125rem;",
                "pe-1" => "padding-right: 0.25rem;",
                "pe-1.5" => "padding-right: 0.375rem;",
                "pe-2" => "padding-right: 0.5rem;",
                "pe-2.5" => "padding-right: 0.625rem;",
                "pe-3" => "padding-right: 0.75rem;",
                "pe-3.5" => "padding-right: 0.875rem;",
                "pe-4" => "padding-right: 1rem;",
                "pe-5" => "padding-right: 1.25rem;",
                "pe-6" => "padding-right: 1.5rem;",
                "pe-7" => "padding-right: 1.75rem;",
                "pe-8" => "padding-right: 2rem;",
                "pe-9" => "padding-right: 2.25rem;",
                "pe-10" => "padding-right: 2.5rem;",
                "pe-11" => "padding-right: 2.75rem;",
                "pe-12" => "padding-right: 3rem;",
                "pe-14" => "padding-right: 3.5rem;",
                "pe-16" => "padding-right: 4rem;",
                "pe-20" => "padding-right: 5rem;",
                "pe-24" => "padding-right: 6rem;",
                "pe-28" => "padding-right: 7rem;",
                "pe-32" => "padding-right: 8rem;",
                "pe-36" => "padding-right: 9rem;",
                "pe-40" => "padding-right: 10rem;",
                "pe-44" => "padding-right: 11rem;",
                "pe-48" => "padding-right: 12rem;",
                "pe-52" => "padding-right: 13rem;",
                "pe-56" => "padding-right: 14rem;",
                "pe-60" => "padding-right: 15rem;",
                "pe-64" => "padding-right: 16rem;",
                "pe-72" => "padding-right: 18rem;",
                "pe-80" => "padding-right: 20rem;",
                "pe-96" => "padding-right: 24rem;",

                "pt-0" => "padding-top: 0;",
                "pt-px" => "padding-top: 1px;",
                "pt-0.5" => "padding-top: 0.125rem;",
                "pt-1" => "padding-top: 0.25rem;",
                "pt-1.5" => "padding-top: 0.375rem;",
                "pt-2" => "padding-top: 0.5rem;",
                "pt-2.5" => "padding-top: 0.625rem;",
                "pt-3" => "padding-top: 0.75rem;",
                "pt-3.5" => "padding-top: 0.875rem;",
                "pt-4" => "padding-top: 1rem;",
                "pt-5" => "padding-top: 1.25rem;",
                "pt-6" => "padding-top: 1.5rem;",
                "pt-7" => "padding-top: 1.75rem;",
                "pt-8" => "padding-top: 2rem;",
                "pt-9" => "padding-top: 2.25rem;",
                "pt-10" => "padding-top: 2.5rem;",
                "pt-11" => "padding-top: 2.75rem;",
                "pt-12" => "padding-top: 3rem;",
                "pt-14" => "padding-top: 3.5rem;",
                "pt-16" => "padding-top: 4rem;",
                "pt-20" => "padding-top: 5rem;",
                "pt-24" => "padding-top: 6rem;",
                "pt-28" => "padding-top: 7rem;",
                "pt-32" => "padding-top: 8rem;",
                "pt-36" => "padding-top: 9rem;",
                "pt-40" => "padding-top: 10rem;",
                "pt-44" => "padding-top: 11rem;",
                "pt-48" => "padding-top: 12rem;",
                "pt-52" => "padding-top: 13rem;",
                "pt-56" => "padding-top: 14rem;",
                "pt-60" => "padding-top: 15rem;",
                "pt-64" => "padding-top: 16rem;",
                "pt-72" => "padding-top: 18rem;",
                "pt-80" => "padding-top: 20rem;",
                "pt-96" => "padding-top: 24rem;",

                "pr-0" => "padding-right: 0;",
                "pr-px" => "padding-right: 1px;",
                "pr-0.5" => "padding-right: 0.125rem;",
                "pr-1" => "padding-right: 0.25rem;",
                "pr-1.5" => "padding-right: 0.375rem;",
                "pr-2" => "padding-right: 0.5rem;",
                "pr-2.5" => "padding-right: 0.625rem;",
                "pr-3" => "padding-right: 0.75rem;",
                "pr-3.5" => "padding-right: 0.875rem;",
                "pr-4" => "padding-right: 1rem;",
                "pr-5" => "padding-right: 1.25rem;",
                "pr-6" => "padding-right: 1.5rem;",
                "pr-7" => "padding-right: 1.75rem;",
                "pr-8" => "padding-right: 2rem;",
                "pr-9" => "padding-right: 2.25rem;",
                "pr-10" => "padding-right: 2.5rem;",
                "pr-11" => "padding-right: 2.75rem;",
                "pr-12" => "padding-right: 3rem;",
                "pr-14" => "padding-right: 3.5rem;",
                "pr-16" => "padding-right: 4rem;",
                "pr-20" => "padding-right: 5rem;",
                "pr-24" => "padding-right: 6rem;",
                "pr-28" => "padding-right: 7rem;",
                "pr-32" => "padding-right: 8rem;",
                "pr-36" => "padding-right: 9rem;",
                "pr-40" => "padding-right: 10rem;",
                "pr-44" => "padding-right: 11rem;",
                "pr-48" => "padding-right: 12rem;",
                "pr-52" => "padding-right: 13rem;",
                "pr-56" => "padding-right: 14rem;",
                "pr-60" => "padding-right: 15rem;",
                "pr-64" => "padding-right: 16rem;",
                "pr-72" => "padding-right: 18rem;",
                "pr-80" => "padding-right: 20rem;",
                "pr-96" => "padding-right: 24rem;",

                "pb-0" => "padding-bottom: 0;",
                "pb-px" => "padding-bottom: 1px;",
                "pb-0.5" => "padding-bottom: 0.125rem;",
                "pb-1" => "padding-bottom: 0.25rem;",
                "pb-1.5" => "padding-bottom: 0.375rem;",
                "pb-2" => "padding-bottom: 0.5rem;",
                "pb-2.5" => "padding-bottom: 0.625rem;",
                "pb-3" => "padding-bottom: 0.75rem;",
                "pb-3.5" => "padding-bottom: 0.875rem;",
                "pb-4" => "padding-bottom: 1rem;",
                "pb-5" => "padding-bottom: 1.25rem;",
                "pb-6" => "padding-bottom: 1.5rem;",
                "pb-7" => "padding-bottom: 1.75rem;",
                "pb-8" => "padding-bottom: 2rem;",
                "pb-9" => "padding-bottom: 2.25rem;",
                "pb-10" => "padding-bottom: 2.5rem;",
                "pb-11" => "padding-bottom: 2.75rem;",
                "pb-12" => "padding-bottom: 3rem;",
                "pb-14" => "padding-bottom: 3.5rem;",
                "pb-16" => "padding-bottom: 4rem;",
                "pb-20" => "padding-bottom: 5rem;",
                "pb-24" => "padding-bottom: 6rem;",
                "pb-28" => "padding-bottom: 7rem;",
                "pb-32" => "padding-bottom: 8rem;",
                "pb-36" => "padding-bottom: 9rem;",
                "pb-40" => "padding-bottom: 10rem;",
                "pb-44" => "padding-bottom: 11rem;",
                "pb-48" => "padding-bottom: 12rem;",
                "pb-52" => "padding-bottom: 13rem;",
                "pb-56" => "padding-bottom: 14rem;",
                "pb-60" => "padding-bottom: 15rem;",
                "pb-64" => "padding-bottom: 16rem;",
                "pb-72" => "padding-bottom: 18rem;",
                "pb-80" => "padding-bottom: 20rem;",
                "pb-96" => "padding-bottom: 24rem;",

                "pl-0" => "padding-left: 0;",
                "pl-px" => "padding-left: 1px;",
                "pl-0.5" => "padding-left: 0.125rem;",
                "pl-1" => "padding-left: 0.25rem;",
                "pl-1.5" => "padding-left: 0.375rem;",
                "pl-2" => "padding-left: 0.5rem;",
                "pl-2.5" => "padding-left: 0.625rem;",
                "pl-3" => "padding-left: 0.75rem;",
                "pl-3.5" => "padding-left: 0.875rem;",
                "pl-4" => "padding-left: 1rem;",
                "pl-5" => "padding-left: 1.25rem;",
                "pl-6" => "padding-left: 1.5rem;",
                "pl-7" => "padding-left: 1.75rem;",
                "pl-8" => "padding-left: 2rem;",
                "pl-9" => "padding-left: 2.25rem;",
                "pl-10" => "padding-left: 2.5rem;",
                "pl-11" => "padding-left: 2.75rem;",
                "pl-12" => "padding-left: 3rem;",
                "pl-14" => "padding-left: 3.5rem;",
                "pl-16" => "padding-left: 4rem;",
                "pl-20" => "padding-left: 5rem;",
                "pl-24" => "padding-left: 6rem;",
                "pl-28" => "padding-left: 7rem;",
                "pl-32" => "padding-left: 8rem;",
                "pl-36" => "padding-left: 9rem;",
                "pl-40" => "padding-left: 10rem;",
                "pl-44" => "padding-left: 11rem;",
                "pl-48" => "padding-left: 12rem;",
                "pl-52" => "padding-left: 13rem;",
                "pl-56" => "padding-left: 14rem;",
                "pl-60" => "padding-left: 15rem;",
                "pl-64" => "padding-left: 16rem;",
                "pl-72" => "padding-left: 18rem;",
                "pl-80" => "padding-left: 20rem;",
                "pl-96" => "padding-left: 24rem;",
            ],

            'margin' => [
                "m-0" => "margin: 0;",
                "m-px" => "margin: 1px;",
                "m-0.5" => "margin: 0.125rem;",
                "m-1" => "margin: 0.25rem;",
                "m-1.5" => "margin: 0.375rem;",
                "m-2" => "margin: 0.5rem;",
                "m-2.5" => "margin: 0.625rem;",
                "m-3" => "margin: 0.75rem;",
                "m-3.5" => "margin: 0.875rem;",
                "m-4" => "margin: 1rem;",
                "m-5" => "margin: 1.25rem;",
                "m-6" => "margin: 1.5rem;",
                "m-7" => "margin: 1.75rem;",
                "m-8" => "margin: 2rem;",
                "m-9" => "margin: 2.25rem;",
                "m-10" => "margin: 2.5rem;",
                "m-11" => "margin: 2.75rem;",
                "m-12" => "margin: 3rem;",
                "m-14" => "margin: 3.5rem;",
                "m-16" => "margin: 4rem;",
                "m-20" => "margin: 5rem;",
                "m-24" => "margin: 6rem;",
                "m-28" => "margin: 7rem;",
                "m-32" => "margin: 8rem;",
                "m-36" => "margin: 9rem;",
                "m-40" => "margin: 10rem;",
                "m-44" => "margin: 11rem;",
                "m-48" => "margin: 12rem;",
                "m-52" => "margin: 13rem;",
                "m-56" => "margin: 14rem;",
                "m-60" => "margin: 15rem;",
                "m-64" => "margin: 16rem;",
                "m-72" => "margin: 18rem;",
                "m-80" => "margin: 20rem;",
                "m-96" => "margin: 24rem;",

                "mx-0" => "margin-left: 0; margin-right: 0;",
                "mx-px" => "margin-left: 1px; margin-right: 1px;",
                "mx-0.5" => "margin-left: 0.125rem; margin-right: 0.125rem;",
                "mx-1" => "margin-left: 0.25rem; margin-right: 0.25rem;",
                "mx-1.5" => "margin-left: 0.375rem; margin-right: 0.375rem;",
                "mx-2" => "margin-left: 0.5rem; margin-right: 0.5rem;",
                "mx-2.5" => "margin-left: 0.625rem; margin-right: 0.625rem;",
                "mx-3" => "margin-left: 0.75rem; margin-right: 0.75rem;",
                "mx-3.5" => "margin-left: 0.875rem; margin-right: 0.875rem;",
                "mx-4" => "margin-left: 1rem; margin-right: 1rem;",
                "mx-5" => "margin-left: 1.25rem; margin-right: 1.25rem;",
                "mx-6" => "margin-left: 1.5rem; margin-right: 1.5rem;",
                "mx-7" => "margin-left: 1.75rem; margin-right: 1.75rem;",
                "mx-8" => "margin-left: 2rem; margin-right: 2rem;",
                "mx-9" => "margin-left: 2.25rem; margin-right: 2.25rem;",
                "mx-10" => "margin-left: 2.5rem; margin-right: 2.5rem;",
                "mx-11" => "margin-left: 2.75rem; margin-right: 2.75rem;",
                "mx-12" => "margin-left: 3rem; margin-right: 3rem;",
                "mx-14" => "margin-left: 3.5rem; margin-right: 3.5rem;",
                "mx-16" => "margin-left: 4rem; margin-right: 4rem;",
                "mx-20" => "margin-left: 5rem; margin-right: 5rem;",
                "mx-24" => "margin-left: 6rem; margin-right: 6rem;",
                "mx-28" => "margin-left: 7rem; margin-right: 7rem;",
                "mx-32" => "margin-left: 8rem; margin-right: 8rem;",
                "mx-36" => "margin-left: 9rem; margin-right: 9rem;",
                "mx-40" => "margin-left: 10rem; margin-right: 10rem;",
                "mx-44" => "margin-left: 11rem; margin-right: 11rem;",
                "mx-48" => "margin-left: 12rem; margin-right: 12rem;",
                "mx-52" => "margin-left: 13rem; margin-right: 13rem;",
                "mx-56" => "margin-left: 14rem; margin-right: 14rem;",
                "mx-60" => "margin-left: 15rem; margin-right: 15rem;",
                "mx-64" => "margin-left: 16rem; margin-right: 16rem;",
                "mx-72" => "margin-left: 18rem; margin-right: 18rem;",
                "mx-80" => "margin-left: 20rem; margin-right: 20rem;",
                "mx-96" => "margin-left: 24rem; margin-right: 24rem;",

                "my-0" => "margin-top: 0; margin-bottom: 0;",
                "my-px" => "margin-top: 1px; margin-bottom: 1px;",
                "my-0.5" => "margin-top: 0.125rem; margin-bottom: 0.125rem;",
                "my-1" => "margin-top: 0.25rem; margin-bottom: 0.25rem;",
                "my-1.5" => "margin-top: 0.375rem; margin-bottom: 0.375rem;",
                "my-2" => "margin-top: 0.5rem; margin-bottom: 0.5rem;",
                "my-2.5" => "margin-top: 0.625rem; margin-bottom: 0.625rem;",
                "my-3" => "margin-top: 0.75rem; margin-bottom: 0.75rem;",
                "my-3.5" => "margin-top: 0.875rem; margin-bottom: 0.875rem;",
                "my-4" => "margin-top: 1rem; margin-bottom: 1rem;",
                "my-5" => "margin-top: 1.25rem; margin-bottom: 1.25rem;",
                "my-6" => "margin-top: 1.5rem; margin-bottom: 1.5rem;",
                "my-7" => "margin-top: 1.75rem; margin-bottom: 1.75rem;",
                "my-8" => "margin-top: 2rem; margin-bottom: 2rem;",
                "my-9" => "margin-top: 2.25rem; margin-bottom: 2.25rem;",
                "my-10" => "margin-top: 2.5rem; margin-bottom: 2.5rem;",
                "my-11" => "margin-top: 2.75rem; margin-bottom: 2.75rem;",
                "my-12" => "margin-top: 3rem; margin-bottom: 3rem;",
                "my-14" => "margin-top: 3.5rem; margin-bottom: 3.5rem;",
                "my-16" => "margin-top: 4rem; margin-bottom: 4rem;",
                "my-20" => "margin-top: 5rem; margin-bottom: 5rem;",
                "my-24" => "margin-top: 6rem; margin-bottom: 6rem;",
                "my-28" => "margin-top: 7rem; margin-bottom: 7rem;",
                "my-32" => "margin-top: 8rem; margin-bottom: 8rem;",
                "my-36" => "margin-top: 9rem; margin-bottom: 9rem;",
                "my-40" => "margin-top: 10rem; margin-bottom: 10rem;",
                "my-44" => "margin-top: 11rem; margin-bottom: 11rem;",
                "my-48" => "margin-top: 12rem; margin-bottom: 12rem;",
                "my-52" => "margin-top: 13rem; margin-bottom: 13rem;",
                "my-56" => "margin-top: 14rem; margin-bottom: 14rem;",
                "my-60" => "margin-top: 15rem; margin-bottom: 15rem;",
                "my-64" => "margin-top: 16rem; margin-bottom: 16rem;",
                "my-72" => "margin-top: 18rem; margin-bottom: 18rem;",
                "my-80" => "margin-top: 20rem; margin-bottom: 20rem;",
                "my-96" => "margin-top: 24rem; margin-bottom: 24rem;",

                "mt-0" => "margin-top: 0;",
                "mt-px" => "margin-top: 1px;",
                "mt-0.5" => "margin-top: 0.125rem;",
                "mt-1" => "margin-top: 0.25rem;",
                "mt-1.5" => "margin-top: 0.375rem;",
                "mt-2" => "margin-top: 0.5rem;",
                "mt-2.5" => "margin-top: 0.625rem;",
                "mt-3" => "margin-top: 0.75rem;",
                "mt-3.5" => "margin-top: 0.875rem;",
                "mt-4" => "margin-top: 1rem;",
                "mt-5" => "margin-top: 1.25rem;",
                "mt-6" => "margin-top: 1.5rem;",
                "mt-7" => "margin-top: 1.75rem;",
                "mt-8" => "margin-top: 2rem;",
                "mt-9" => "margin-top: 2.25rem;",
                "mt-10" => "margin-top: 2.5rem;",
                "mt-11" => "margin-top: 2.75rem;",
                "mt-12" => "margin-top: 3rem;",
                "mt-14" => "margin-top: 3.5rem;",
                "mt-16" => "margin-top: 4rem;",
                "mt-20" => "margin-top: 5rem;",
                "mt-24" => "margin-top: 6rem;",
                "mt-28" => "margin-top: 7rem;",
                "mt-32" => "margin-top: 8rem;",
                "mt-36" => "margin-top: 9rem;",
                "mt-40" => "margin-top: 10rem;",
                "mt-44" => "margin-top: 11rem;",
                "mt-48" => "margin-top: 12rem;",
                "mt-52" => "margin-top: 13rem;",
                "mt-56" => "margin-top: 14rem;",
                "mt-60" => "margin-top: 15rem;",
                "mt-64" => "margin-top: 16rem;",
                "mt-72" => "margin-top: 18rem;",
                "mt-80" => "margin-top: 20rem;",
                "mt-96" => "margin-top: 24rem;",

                "mr-0" => "margin-right: 0;",
                "mr-px" => "margin-right: 1px;",
                "mr-0.5" => "margin-right: 0.125rem;",
                "mr-1" => "margin-right: 0.25rem;",
                "mr-1.5" => "margin-right: 0.375rem;",
                "mr-2" => "margin-right: 0.5rem;",
                "mr-2.5" => "margin-right: 0.625rem;",
                "mr-3" => "margin-right: 0.75rem;",
                "mr-3.5" => "margin-right: 0.875rem;",
                "mr-4" => "margin-right: 1rem;",
                "mr-5" => "margin-right: 1.25rem;",
                "mr-6" => "margin-right: 1.5rem;",
                "mr-7" => "margin-right: 1.75rem;",
                "mr-8" => "margin-right: 2rem;",
                "mr-9" => "margin-right: 2.25rem;",
                "mr-10" => "margin-right: 2.5rem;",
                "mr-11" => "margin-right: 2.75rem;",
                "mr-12" => "margin-right: 3rem;",
                "mr-14" => "margin-right: 3.5rem;",
                "mr-16" => "margin-right: 4rem;",
                "mr-20" => "margin-right: 5rem;",
                "mr-24" => "margin-right: 6rem;",
                "mr-28" => "margin-right: 7rem;",
                "mr-32" => "margin-right: 8rem;",
                "mr-36" => "margin-right: 9rem;",
                "mr-40" => "margin-right: 10rem;",
                "mr-44" => "margin-right: 11rem;",
                "mr-48" => "margin-right: 12rem;",
                "mr-52" => "margin-right: 13rem;",
                "mr-56" => "margin-right: 14rem;",
                "mr-60" => "margin-right: 15rem;",
                "mr-64" => "margin-right: 16rem;",
                "mr-72" => "margin-right: 18rem;",
                "mr-80" => "margin-right: 20rem;",
                "mr-96" => "margin-right: 24rem;",

                "mb-0" => "margin-bottom: 0;",
                "mb-px" => "margin-bottom: 1px;",
                "mb-0.5" => "margin-bottom: 0.125rem;",
                "mb-1" => "margin-bottom: 0.25rem;",
                "mb-1.5" => "margin-bottom: 0.375rem;",
                "mb-2" => "margin-bottom: 0.5rem;",
                "mb-2.5" => "margin-bottom: 0.625rem;",
                "mb-3" => "margin-bottom: 0.75rem;",
                "mb-3.5" => "margin-bottom: 0.875rem;",
                "mb-4" => "margin-bottom: 1rem;",
                "mb-5" => "margin-bottom: 1.25rem;",
                "mb-6" => "margin-bottom: 1.5rem;",
                "mb-7" => "margin-bottom: 1.75rem;",
                "mb-8" => "margin-bottom: 2rem;",
                "mb-9" => "margin-bottom: 2.25rem;",
                "mb-10" => "margin-bottom: 2.5rem;",
                "mb-11" => "margin-bottom: 2.75rem;",
                "mb-12" => "margin-bottom: 3rem;",
                "mb-14" => "margin-bottom: 3.5rem;",
                "mb-16" => "margin-bottom: 4rem;",
                "mb-20" => "margin-bottom: 5rem;",
                "mb-24" => "margin-bottom: 6rem;",
                "mb-28" => "margin-bottom: 7rem;",
                "mb-32" => "margin-bottom: 8rem;",
                "mb-36" => "margin-bottom: 9rem;",
                "mb-40" => "margin-bottom: 10rem;",
                "mb-44" => "margin-bottom: 11rem;",
                "mb-48" => "margin-bottom: 12rem;",
                "mb-52" => "margin-bottom: 13rem;",
                "mb-56" => "margin-bottom: 14rem;",
                "mb-60" => "margin-bottom: 15rem;",
                "mb-64" => "margin-bottom: 16rem;",
                "mb-72" => "margin-bottom: 18rem;",
                "mb-80" => "margin-bottom: 20rem;",
                "mb-96" => "margin-bottom: 24rem;",

                "ml-0" => "margin-left: 0;",
                "ml-px" => "margin-left: 1px;",
                "ml-0.5" => "margin-left: 0.125rem;",
                "ml-1" => "margin-left: 0.25rem;",
                "ml-1.5" => "margin-left: 0.375rem;",
                "ml-2" => "margin-left: 0.5rem;",
                "ml-2.5" => "margin-left: 0.625rem;",
                "ml-3" => "margin-left: 0.75rem;",
                "ml-3.5" => "margin-left: 0.875rem;",
                "ml-4" => "margin-left: 1rem;",
                "ml-5" => "margin-left: 1.25rem;",
                "ml-6" => "margin-left: 1.5rem;",
                "ml-7" => "margin-left: 1.75rem;",
                "ml-8" => "margin-left: 2rem;",
                "ml-9" => "margin-left: 2.25rem;",
                "ml-10" => "margin-left: 2.5rem;",
                "ml-11" => "margin-left: 2.75rem;",
                "ml-12" => "margin-left: 3rem;",
                "ml-14" => "margin-left: 3.5rem;",
                "ml-16" => "margin-left: 4rem;",
                "ml-20" => "margin-left: 5rem;",
                "ml-24" => "margin-left: 6rem;",
                "ml-28" => "margin-left: 7rem;",
                "ml-32" => "margin-left: 8rem;",
                "ml-36" => "margin-left: 9rem;",
                "ml-40" => "margin-left: 10rem;",
                "ml-44" => "margin-left: 11rem;",
                "ml-48" => "margin-left: 12rem;",
                "ml-52" => "margin-left: 13rem;",
                "ml-56" => "margin-left: 14rem;",
                "ml-60" => "margin-left: 15rem;",
                "ml-64" => "margin-left: 16rem;",
                "ml-72" => "margin-left: 18rem;",
                "ml-80" => "margin-left: 20rem;",
                "ml-96" => "margin-left: 24rem;",
            ],

            'space-between' => [
                "space-x-0" => "margin-right: 0; margin-left: 0;",
                "space-x-px" => "margin-right: 1px; margin-left: 1px;",
                "space-x-0.5" => "margin-right: 0.125rem; margin-left: 0.125rem;",
                "space-x-1" => "margin-right: 0.25rem; margin-left: 0.25rem;",
                "space-x-1.5" => "margin-right: 0.375rem; margin-left: 0.375rem;",
                "space-x-2" => "margin-right: 0.5rem; margin-left: 0.5rem;",
                "space-x-2.5" => "margin-right: 0.625rem; margin-left: 0.625rem;",
                "space-x-3" => "margin-right: 0.75rem; margin-left: 0.75rem;",
                "space-x-3.5" => "margin-right: 0.875rem; margin-left: 0.875rem;",
                "space-x-4" => "margin-right: 1rem; margin-left: 1rem;",
                "space-x-5" => "margin-right: 1.25rem; margin-left: 1.25rem;",
                "space-x-6" => "margin-right: 1.5rem; margin-left: 1.5rem;",
                "space-x-7" => "margin-right: 1.75rem; margin-left: 1.75rem;",
                "space-x-8" => "margin-right: 2rem; margin-left: 2rem;",
                "space-x-9" => "margin-right: 2.25rem; margin-left: 2.25rem;",
                "space-x-10" => "margin-right: 2.5rem; margin-left: 2.5rem;",
                "space-x-11" => "margin-right: 2.75rem; margin-left: 2.75rem;",
                "space-x-12" => "margin-right: 3rem; margin-left: 3rem;",
                "space-x-14" => "margin-right: 3.5rem; margin-left: 3.5rem;",
                "space-x-16" => "margin-right: 4rem; margin-left: 4rem;",
                "space-x-20" => "margin-right: 5rem; margin-left: 5rem;",
                "space-x-24" => "margin-right: 6rem; margin-left: 6rem;",
                "space-x-28" => "margin-right: 7rem; margin-left: 7rem;",
                "space-x-32" => "margin-right: 8rem; margin-left: 8rem;",
                "space-x-36" => "margin-right: 9rem; margin-left: 9rem;",
                "space-x-40" => "margin-right: 10rem; margin-left: 10rem;",
                "space-x-44" => "margin-right: 11rem; margin-left: 11rem;",
                "space-x-48" => "margin-right: 12rem; margin-left: 12rem;",
                "space-x-52" => "margin-right: 13rem; margin-left: 13rem;",
                "space-x-56" => "margin-right: 14rem; margin-left: 14rem;",
                "space-x-60" => "margin-right: 15rem; margin-left: 15rem;",
                "space-x-64" => "margin-right: 16rem; margin-left: 16rem;",
                "space-x-72" => "margin-right: 18rem; margin-left: 18rem;",
                "space-x-80" => "margin-right: 20rem; margin-left: 20rem;",
                "space-x-96" => "margin-right: 24rem; margin-left: 24rem;",

                "space-y-0" => "margin-top: 0; margin-bottom: 0;",
                "space-y-px" => "margin-top: 1px; margin-bottom: 1px;",
                "space-y-0.5" => "margin-top: 0.125rem; margin-bottom: 0.125rem;",
                "space-y-1" => "margin-top: 0.25rem; margin-bottom: 0.25rem;",
                "space-y-1.5" => "margin-top: 0.375rem; margin-bottom: 0.375rem;",
                "space-y-2" => "margin-top: 0.5rem; margin-bottom: 0.5rem;",
                "space-y-2.5" => "margin-top: 0.625rem; margin-bottom: 0.625rem;",
                "space-y-3" => "margin-top: 0.75rem; margin-bottom: 0.75rem;",
                "space-y-3.5" => "margin-top: 0.875rem; margin-bottom: 0.875rem;",
                "space-y-4" => "margin-top: 1rem; margin-bottom: 1rem;",
                "space-y-5" => "margin-top: 1.25rem; margin-bottom: 1.25rem;",
                "space-y-6" => "margin-top: 1.5rem; margin-bottom: 1.5rem;",
                "space-y-7" => "margin-top: 1.75rem; margin-bottom: 1.75rem;",
                "space-y-8" => "margin-top: 2rem; margin-bottom: 2rem;",
                "space-y-9" => "margin-top: 2.25rem; margin-bottom: 2.25rem;",
                "space-y-10" => "margin-top: 2.5rem; margin-bottom: 2.5rem;",
                "space-y-11" => "margin-top: 2.75rem; margin-bottom: 2.75rem;",
                "space-y-12" => "margin-top: 3rem; margin-bottom: 3rem;",
                "space-y-14" => "margin-top: 3.5rem; margin-bottom: 3.5rem;",
                "space-y-16" => "margin-top: 4rem; margin-bottom: 4rem;",
                "space-y-20" => "margin-top: 5rem; margin-bottom: 5rem;",
                "space-y-24" => "margin-top: 6rem; margin-bottom: 6rem;",
                "space-y-28" => "margin-top: 7rem; margin-bottom: 7rem;",
                "space-y-32" => "margin-top: 8rem; margin-bottom: 8rem;",
                "space-y-36" => "margin-top: 9rem; margin-bottom: 9rem;",
                "space-y-40" => "margin-top: 10rem; margin-bottom: 10rem;",
                "space-y-44" => "margin-top: 11rem; margin-bottom: 11rem;",
                "space-y-48" => "margin-top: 12rem; margin-bottom: 12rem;",
                "space-y-52" => "margin-top: 13rem; margin-bottom: 13rem;",
                "space-y-56" => "margin-top: 14rem; margin-bottom: 14rem;",
                "space-y-60" => "margin-top: 15rem; margin-bottom: 15rem;",
                "space-y-64" => "margin-top: 16rem; margin-bottom: 16rem;",
                "space-y-72" => "margin-top: 18rem; margin-bottom: 18rem;",
                "space-y-80" => "margin-top: 20rem; margin-bottom: 20rem;",
                "space-y-96" => "margin-top: 24rem; margin-bottom: 24rem;",

                "space-x-reverse" => "direction: rtl; margin-right: auto; margin-left: auto;",
                "space-y-reverse" => "direction: rtl; margin-top: auto; margin-bottom: auto;",
            ],
        ];

        $this->createStyles('Spacing', $spacing);

        $sizing = [
            "width" => [
                "w-0" => "width: 0;",
                "w-px" => "width: 1px;",
                "w-0.5" => "width: 0.125rem;",
                "w-1" => "width: 0.25rem;",
                "w-1.5" => "width: 0.375rem;",
                "w-2" => "width: 0.5rem;",
                "w-2.5" => "width: 0.625rem;",
                "w-3" => "width: 0.75rem;",
                "w-3.5" => "width: 0.875rem;",
                "w-4" => "width: 1rem;",
                "w-5" => "width: 1.25rem;",
                "w-6" => "width: 1.5rem;",
                "w-7" => "width: 1.75rem;",
                "w-8" => "width: 2rem;",
                "w-9" => "width: 2.25rem;",
                "w-10" => "width: 2.5rem;",
                "w-11" => "width: 2.75rem;",
                "w-12" => "width: 3rem;",
                "w-14" => "width: 3.5rem;",
                "w-16" => "width: 4rem;",
                "w-20" => "width: 5rem;",
                "w-24" => "width: 6rem;",
                "w-28" => "width: 7rem;",
                "w-32" => "width: 8rem;",
                "w-36" => "width: 9rem;",
                "w-40" => "width: 10rem;",
                "w-44" => "width: 11rem;",
                "w-48" => "width: 12rem;",
                "w-52" => "width: 13rem;",
                "w-56" => "width: 14rem;",
                "w-60" => "width: 15rem;",
                "w-64" => "width: 16rem;",
                "w-72" => "width: 18rem;",
                "w-80" => "width: 20rem;",
                "w-96" => "width: 24rem;",
                "w-1/2" => "width: 50%;",
                "w-1/3" => "width: 33.333333%;",
                "w-2/3" => "width: 66.666667%;",
                "w-1/4" => "width: 25%;",
                "w-2/4" => "width: 50%;",
                "w-3/4" => "width: 75%;",
                "w-1/5" => "width: 20%;",
                "w-2/5" => "width: 40%;",
                "w-3/5" => "width: 60%;",
                "w-4/5" => "width: 80%;",
                "w-1/6" => "width: 16.666667%;",
                "w-2/6" => "width: 33.333333%;",
                "w-3/6" => "width: 50%;",
                "w-4/6" => "width: 66.666667%;",
                "w-5/6" => "width: 83.333333%;",
                "w-1/12" => "width: 8.333333%;",
                "w-2/12" => "width: 16.666667%;",
                "w-3/12" => "width: 25%;",
                "w-4/12" => "width: 33.333333%;",
                "w-5/12" => "width: 41.666667%;",
                "w-6/12" => "width: 50%;",
                "w-7/12" => "width: 58.333333%;",
                "w-8/12" => "width: 66.666667%;",
                "w-9/12" => "width: 75%;",
                "w-10/12" => "width: 83.333333%;",
                "w-11/12" => "width: 91.666667%;",
                "w-auto" => "width: auto;",
                "w-full" => "width: 100%;",
                "w-screen" => "width: 100vw;",
                "w-min" => "width: min-content;",
                "w-max" => "width: max-content;",
                "w-fit" => "width: fit-content;",
            ],

            "min-width" => [
                "min-w-0" => "min-width: 0;",
                "min-w-1" => "min-width: 0.25rem;", /* 4px */
                "min-w-2" => "min-width: 0.5rem;", /* 8px */
                "min-w-3" => "min-width: 0.75rem;", /* 12px */
                "min-w-4" => "min-width: 1rem; ", /* 16px */
                "min-w-5" => "min-width: 1.25rem;", /* 20px */
                "min-w-6" => "min-width: 1.5rem;", /* 24px */
                "min-w-7" => "min-width: 1.75rem;", /* 28px */
                "min-w-8" => "min-width: 2rem; ", /* 32px */
                "min-w-9" => "min-width: 2.25rem;", /* 36px */
                "min-w-10" => "min-width: 2.5rem;", /* 40px */
                "min-w-11" => "min-width: 2.75rem;", /* 44px */
                "min-w-12" => "min-width: 3rem; ", /* 48px */
                "min-w-14" => "min-width: 3.5rem;", /* 56px */
                "min-w-16" => "min-width: 4rem; ", /* 64px */
                "min-w-20" => "min-width: 5rem; ", /* 80px */
                "min-w-24" => "min-width: 6rem; ", /* 96px */
                "min-w-28" => "min-width: 7rem; ", /* 112px */
                "min-w-32" => "min-width: 8rem; ", /* 128px */
                "min-w-36" => "min-width: 9rem; ", /* 144px */
                "min-w-40" => "min-width: 10rem; ", /* 160px */
                "min-w-44" => "min-width: 11rem; ", /* 176px */
                "min-w-48" => "min-width: 12rem; ", /* 192px */
                "min-w-52" => "min-width: 13rem; ", /* 208px */
                "min-w-56" => "min-width: 14rem; ", /* 224px */
                "min-w-60" => "min-width: 15rem; ", /* 240px */
                "min-w-64" => "min-width: 16rem; ", /* 256px */
                "min-w-72" => "min-width: 18rem; ", /* 288px */
                "min-w-80" => "min-width: 20rem; ", /* 320px */
                "min-w-96" => "min-width: 24rem; ", /* 384px */
                "min-w-px" => "min-width: 1px;",
                "min-w-0.5" => "min-width: 0.125rem;", /* 2px */
                "min-w-1.5" => "min-width: 0.375rem;", /* 6px */
                "min-w-2.5" => "min-width: 0.625rem;", /* 10px */
                "min-w-3.5" => "min-width: 0.875rem;", /* 14px */
                "min-w-full" => "min-width: 100%;",
                "min-w-min" => "min-width: min-content;",
                "min-w-max" => "min-width: max-content;",
                "min-w-fit" => "min-width: fit-content;",
            ],

            "max-width" => [
                "max-w-0" => "max-width: 0;",
                "max-w-px" => "max-width: 1px;",
                "max-w-0.5" => "max-width: 0.125rem;", /* 2px */
                "max-w-1" => "max-width: 0.25rem;", /* 4px */
                "max-w-1.5" => "max-width: 0.375rem;", /* 6px */
                "max-w-2" => "max-width: 0.5rem;", /* 8px */
                "max-w-2.5" => "max-width: 0.625rem;", /* 10px */
                "max-w-3" => "max-width: 0.75rem;", /* 12px */
                "max-w-3.5" => "max-width: 0.875rem;", /* 14px */
                "max-w-4" => "max-width: 1rem; ", /* 16px */
                "max-w-5" => "max-width: 1.25rem;", /* 20px */
                "max-w-6" => "max-width: 1.5rem;", /* 24px */
                "max-w-7" => "max-width: 1.75rem;", /* 28px */
                "max-w-8" => "max-width: 2rem; ", /* 32px */
                "max-w-9" => "max-width: 2.25rem;", /* 36px */
                "max-w-10" => "max-width: 2.5rem;", /* 40px */
                "max-w-11" => "max-width: 2.75rem;", /* 44px */
                "max-w-12" => "max-width: 3rem; ", /* 48px */
                "max-w-14" => "max-width: 3.5rem;", /* 56px */
                "max-w-16" => "max-width: 4rem; ", /* 64px */
                "max-w-20" => "max-width: 5rem; ", /* 80px */
                "max-w-24" => "max-width: 6rem; ", /* 96px */
                "max-w-28" => "max-width: 7rem; ", /* 112px */
                "max-w-32" => "max-width: 8rem; ", /* 128px */
                "max-w-36" => "max-width: 9rem; ", /* 144px */
                "max-w-40" => "max-width: 10rem; ", /* 160px */
                "max-w-44" => "max-width: 11rem; ", /* 176px */
                "max-w-48" => "max-width: 12rem; ", /* 192px */
                "max-w-52" => "max-width: 13rem; ", /* 208px */
                "max-w-56" => "max-width: 14rem; ", /* 224px */
                "max-w-60" => "max-width: 15rem; ", /* 240px */
                "max-w-64" => "max-width: 16rem; ", /* 256px */
                "max-w-72" => "max-width: 18rem; ", /* 288px */
                "max-w-80" => "max-width: 20rem; ", /* 320px */
                "max-w-96" => "max-width: 24rem; ", /* 384px */
                "max-w-none" => "max-width: none;",
                "max-w-xs" => "max-width: 20rem;",
                "max-w-sm" => "max-width: 24rem;",
                "max-w-md" => "max-width: 28rem;",
                "max-w-lg" => "max-width: 32rem;",
                "max-w-xl" => "max-width: 36rem;",
                "max-w-2xl" => "max-width: 42rem;",
                "max-w-3xl" => "max-width: 48rem;",
                "max-w-4xl" => "max-width: 56rem;",
                "max-w-5xl" => "max-width: 64rem;",
                "max-w-6xl" => "max-width: 72rem;",
                "max-w-7xl" => "max-width: 80rem;",
                "max-w-full" => "max-width: 100%;",
                "max-w-min" => "max-width: min-content;",
                "max-w-max" => "max-width: max-content;",
                "max-w-fit" => "max-width: fit-content;",
                "max-w-prose" => "max-width: 65ch;",
                "max-w-screen-sm" => "max-width: 640px;",
                "max-w-screen-md" => "max-width: 768px;",
                "max-w-screen-lg" => "max-width: 1024px;",
                "max-w-screen-xl" => "max-width: 1280px;",
                "max-w-screen-2xl" => "max-width: 1536px;",
            ],

            "height" => [
                "h-0" => "height: 0;",
                "h-px" => "height: 1px;",
                "h-0.5" => "height: 0.125rem;",
                "h-1" => "height: 0.25rem;",
                "h-1.5" => "height: 0.375rem;",
                "h-2" => "height: 0.5rem;",
                "h-2.5" => "height: 0.625rem;",
                "h-3" => "height: 0.75rem;",
                "h-3.5" => "height: 0.875rem;",
                "h-4" => "height: 1rem;",
                "h-5" => "height: 1.25rem;",
                "h-6" => "height: 1.5rem;",
                "h-7" => "height: 1.75rem;",
                "h-8" => "height: 2rem;",
                "h-9" => "height: 2.25rem;",
                "h-10" => "height: 2.5rem;",
                "h-11" => "height: 2.75rem;",
                "h-12" => "height: 3rem;",
                "h-14" => "height: 3.5rem;",
                "h-16" => "height: 4rem;",
                "h-20" => "height: 5rem;",
                "h-24" => "height: 6rem;",
                "h-28" => "height: 7rem;",
                "h-32" => "height: 8rem;",
                "h-36" => "height: 9rem;",
                "h-40" => "height: 10rem;",
                "h-44" => "height: 11rem;",
                "h-48" => "height: 12rem;",
                "h-52" => "height: 13rem;",
                "h-56" => "height: 14rem;",
                "h-60" => "height: 15rem;",
                "h-64" => "height: 16rem;",
                "h-72" => "height: 18rem;",
                "h-80" => "height: 20rem;",
                "h-96" => "height: 24rem;",
                "h-1/2" => "height: 50%;",
                "h-1/3" => "height: 33.333333%;",
                "h-2/3" => "height: 66.666667%;",
                "h-1/4" => "height: 25%;",
                "h-2/4" => "height: 50%;",
                "h-3/4" => "height: 75%;",
                "h-1/5" => "height: 20%;",
                "h-2/5" => "height: 40%;",
                "h-3/5" => "height: 60%;",
                "h-4/5" => "height: 80%;",
                "h-1/6" => "height: 16.666667%;",
                "h-2/6" => "height: 33.333333%;",
                "h-3/6" => "height: 50%;",
                "h-4/6" => "height: 66.666667%;",
                "h-5/6" => "height: 83.333333%;",
                "h-auto" => "height: auto;",
                "h-full" => "height: 100%;",
                "h-screen" => "height: 100vh;",
                "h-min" => "height: min-content;",
                "h-max" => "height: max-content;",
                "h-fit" => "height: fit-content;",
            ],

            "min-height" => [
                "min-h-0" => "min-height: 0;",
                "min-h-full" => "min-height: 100%;",
                "min-h-screen" => "min-height: 100vh;",
                "min-h-min" => "min-height: min-content;",
                "min-h-max" => "min-height: max-content;",
                "min-h-fit" => "min-height: fit-content;",
            ],

            "max-height" => [
                "max-h-0" => "max-height: 0;",
                "max-h-px" => "max-height: 1px;",
                "max-h-0.5" => "max-height: 0.125rem;",
                "max-h-1" => "max-height: 0.25rem;",
                "max-h-1.5" => "max-height: 0.375rem;",
                "max-h-2" => "max-height: 0.5rem;",
                "max-h-2.5" => "max-height: 0.625rem;",
                "max-h-3" => "max-height: 0.75rem;",
                "max-h-3.5" => "max-height: 0.875rem;",
                "max-h-4" => "max-height: 1rem;",
                "max-h-5" => "max-height: 1.25rem;",
                "max-h-6" => "max-height: 1.5rem;",
                "max-h-7" => "max-height: 1.75rem;",
                "max-h-8" => "max-height: 2rem;",
                "max-h-9" => "max-height: 2.25rem;",
                "max-h-10" => "max-height: 2.5rem;",
                "max-h-11" => "max-height: 2.75rem;",
                "max-h-12" => "max-height: 3rem;",
                "max-h-14" => "max-height: 3.5rem;",
                "max-h-16" => "max-height: 4rem;",
                "max-h-20" => "max-height: 5rem;",
                "max-h-24" => "max-height: 6rem;",
                "max-h-28" => "max-height: 7rem;",
                "max-h-32" => "max-height: 8rem;",
                "max-h-36" => "max-height: 9rem;",
                "max-h-40" => "max-height: 10rem;",
                "max-h-44" => "max-height: 11rem;",
                "max-h-48" => "max-height: 12rem;",
                "max-h-52" => "max-height: 13rem;",
                "max-h-56" => "max-height: 14rem;",
                "max-h-60" => "max-height: 15rem;",
                "max-h-64" => "max-height: 16rem;",
                "max-h-72" => "max-height: 18rem;",
                "max-h-80" => "max-height: 20rem;",
                "max-h-96" => "max-height: 24rem;",
                "max-h-none" => "max-height: none;",
                "max-h-full" => "max-height: 100%;",
                "max-h-screen" => "max-height: 100vh;",
                "max-h-min" => "max-height: min-content;",
                "max-h-max" => "max-height: max-content;",
                "max-h-fit" => "max-height: fit-content;",
            ],

            "size" => [
                'size-0' => 'width: 0px; height: 0px;',
                'size-px' => 'width: 1px; height: 1px;',
                'size-0.5' => 'width: 0.125rem; height: 0.125rem;',
                'size-1' => 'width: 0.25rem; height: 0.25rem;',
                'size-1.5' => 'width: 0.375rem; height: 0.375rem;',
                'size-2' => 'width: 0.5rem; height: 0.5rem;',
                'size-2.5' => 'width: 0.625rem; height: 0.625rem;',
                'size-3' => 'width: 0.75rem; height: 0.75rem;',
                'size-3.5' => 'width: 0.875rem; height: 0.875rem;',
                'size-4' => 'width: 1rem; height: 1rem;',
                'size-5' => 'width: 1.25rem; height: 1.25rem;',
                'size-6' => 'width: 1.5rem; height: 1.5rem;',
                'size-7' => 'width: 1.75rem; height: 1.75rem;',
                'size-8' => 'width: 2rem; height: 2rem;',
                'size-9' => 'width: 2.25rem; height: 2.25rem;',
                'size-10' => 'width: 2.5rem; height: 2.5rem;',
                'size-11' => 'width: 2.75rem; height: 2.75rem;',
                'size-12' => 'width: 3rem; height: 3rem;',
                'size-14' => 'width: 3.5rem; height: 3.5rem;',
                'size-16' => 'width: 4rem; height: 4rem;',
                'size-20' => 'width: 5rem; height: 5rem;',
                'size-24' => 'width: 6rem; height: 6rem;',
                'size-28' => 'width: 7rem; height: 7rem;',
                'size-32' => 'width: 8rem; height: 8rem;',
                'size-36' => 'width: 9rem; height: 9rem;',
                'size-40' => 'width: 10rem; height: 10rem;',
                'size-44' => 'width: 11rem; height: 11rem;',
                'size-48' => 'width: 12rem; height: 12rem;',
                'size-52' => 'width: 13rem; height: 13rem;',
                'size-56' => 'width: 14rem; height: 14rem;',
                'size-60' => 'width: 15rem; height: 15rem;',
                'size-64' => 'width: 16rem; height: 16rem;',
                'size-72' => 'width: 18rem; height: 18rem;',
                'size-80' => 'width: 20rem; height: 20rem;',
                'size-96' => 'width: 24rem; height: 24rem;',
                'size-auto' => 'width: auto; height: auto;',
                'size-1/2' => 'width: 50%; height: 50%;',
                'size-1/3' => 'width: 33.333333%; height: 33.333333%;',
                'size-2/3' => 'width: 66.666667%; height: 66.666667%;',
                'size-1/4' => 'width: 25%; height: 25%;',
                'size-2/4' => 'width: 50%; height: 50%;',
                'size-3/4' => 'width: 75%; height: 75%;',
                'size-1/5' => 'width: 20%; height: 20%;',
                'size-2/5' => 'width: 40%; height: 40%;',
                'size-3/5' => 'width: 60%; height: 60%;',
                'size-4/5' => 'width: 80%; height: 80%;',
                'size-1/6' => 'width: 16.666667%; height: 16.666667%;',
                'size-2/6' => 'width: 33.333333%; height: 33.333333%;',
                'size-3/6' => 'width: 50%; height: 50%;',
                'size-4/6' => 'width: 66.666667%; height: 66.666667%;',
                'size-5/6' => 'width: 83.333333%; height: 83.333333%;',
                'size-1/12' => 'width: 8.333333%; height: 8.333333%;',
                'size-2/12' => 'width: 16.666667%; height: 16.666667%;',
                'size-3/12' => 'width: 25%; height: 25%;',
                'size-4/12' => 'width: 33.333333%; height: 33.333333%;',
                'size-5/12' => 'width: 41.666667%; height: 41.666667%;',
                'size-6/12' => 'width: 50%; height: 50%;',
                'size-7/12' => 'width: 58.333333%; height: 58.333333%;',
                'size-8/12' => 'width: 66.666667%; height: 66.666667%;',
                'size-9/12' => 'width: 75%; height: 75%;',
                'size-10/12' => 'width: 83.333333%; height: 83.333333%;',
                'size-11/12' => 'width: 91.666667%; height: 91.666667%;',
                'size-full' => 'width: 100%; height: 100%;',
                'size-min' => 'width: min-content; height: min-content;',
                'size-max' => 'width: max-content; height: max-content;',
                'size-fit' => 'width: fit-content; height: fit-content;',
            ],
        ];

        $this->createStyles('Sizing', $sizing);

        $typography = [
            "font-family" => [
                "font-sans" => "font-family: sans-serif;",
                "font-serif" => "font-family: serif;",
                "font-mono" => "font-family: monospace;",
            ],

            "font-size" => [
                "text-xs" => "font-size: 0.75rem;", // 12px
                "text-sm" => "font-size: 0.875rem;", // 14px
                "text-base" => "font-size: 1rem;", // 16px
                "text-lg" => "font-size: 1.125rem;", // 18px
                "text-xl" => "font-size: 1.25rem;", // 20px
                "text-2xl" => "font-size: 1.5rem;", // 24px
                "text-3xl" => "font-size: 1.875rem;", // 30px
                "text-4xl" => "font-size: 2.25rem;", // 36px
                "text-5xl" => "font-size: 3rem;", // 48px
                "text-6xl" => "font-size: 3.75rem;", // 60px
                "text-7xl" => "font-size: 4.5rem;", // 72px
                "text-8xl" => "font-size: 6rem;", // 96px
                "text-9xl" => "font-size: 8rem;", // 128px
            ],

            "font-smoothing" => [
                "antialiased" => "font-smooth: antialiased;",
                "subpixel-antialiased" => "font-smooth: subpixel-antialiased;",
            ],

            "font-style" => [
                "italic" => "font-style: italic;",
                "not-italic" => "font-style: normal;",
            ],

            "font-weight" => [
                "font-thin" => "font-weight: 100;",
                "font-extralight" => "font-weight: 200;",
                "font-light" => "font-weight: 300;",
                "font-normal" => "font-weight: 400;",
                "font-medium" => "font-weight: 500;",
                "font-semibold" => "font-weight: 600;",
                "font-bold" => "font-weight: 700;",
                "font-extrabold" => "font-weight: 800;",
                "font-black" => "font-weight: 900;",
            ],

            "font-variant-numeric" => [
                "normal-nums" => "font-variant-numeric: normal-nums;",
                "ordinal" => "font-variant-numeric: ordinal;",
                "slashed-zero" => "font-variant-numeric: slashed-zero;",
                "lining-nums" => "font-variant-numeric: lining-nums;",
                "oldstyle-nums" => "font-variant-numeric: oldstyle-nums;",
                "proportional-nums" => "font-variant-numeric: proportional-nums;",
                "tabular-nums" => "font-variant-numeric: tabular-nums;",
                "diagonal-fractions" => "font-variant-numeric: diagonal-fractions;",
                "stacked-fractions" => "font-variant-numeric: stacked-fractions;",
            ],

            "letter-spacing" => [
                "tracking-tighter" => "letter-spacing: -0.05em;",
                "tracking-tight" => "letter-spacing: -0.025em;",
                "tracking-normal" => "letter-spacing: 0;",
                "tracking-wide" => "letter-spacing: 0.025em;",
                "tracking-wider" => "letter-spacing: 0.05em;",
                "tracking-widest" => "letter-spacing: 0.1em;",
            ],

            "line-clamp" => [
                "line-clamp-1" => "display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;",
                "line-clamp-2" => "display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;",
                "line-clamp-3" => "display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;",
                "line-clamp-4" => "display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden;",
                "line-clamp-5" => "display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; overflow: hidden;",
                "line-clamp-6" => "display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical; overflow: hidden;",
                "line-clamp-none" => "display: block; overflow: visible;",
            ],

            "line-height" => [
                "leading-3" => "line-height: 0.75rem;", // 12px
                "leading-4" => "line-height: 1rem;", // 16px
                "leading-5" => "line-height: 1.25rem;", // 20px
                "leading-6" => "line-height: 1.5rem;", // 24px
                "leading-7" => "line-height: 1.75rem;", // 28px
                "leading-8" => "line-height: 2rem;", // 32px
                "leading-9" => "line-height: 2.25rem;", // 36px
                "leading-10" => "line-height: 2.5rem;", // 40px
                "leading-none" => "line-height: 1;",
                "leading-tight" => "line-height: 1.25;",
                "leading-snug" => "line-height: 1.375;",
                "leading-normal" => "line-height: 1.5;",
                "leading-relaxed" => "line-height: 1.625;",
                "leading-loose" => "line-height: 2;",
            ],

            "list-style-image" => [
                "list-image-none" => "list-style-image: none;",
            ],

            "list-style-position" => [
                "list-inside" => "list-style-position: inside;",
                "list-outside" => "list-style-position: outside;",
            ],

            "list-style-type" => [
                "list-none" => "list-style-type: none;",
                "list-disc" => "list-style-type: disc;",
                "list-decimal" => "list-style-type: decimal;",
            ],

            "text-align" => [
                "text-left" => "text-align: left;",
                "text-center" => "text-align: center;",
                "text-right" => "text-align: right;",
                "text-justify" => "text-align: justify;",
                "text-start" => "text-align: start;",
                "text-end" => "text-align: end;",
            ],
            "text-color" => [
                "text-inherit" => "color: inherit;",
                "text-current" => "color: currentColor;",
                "text-transparent" => "color: transparent;",
            ],
            "text-decoration" => [
                "underline" => "text-decoration: underline;",
                "overline" => "text-decoration: overline;",
                "line-through" => "text-decoration: line-through;",
                "no-underline" => "text-decoration: none;",
            ],
            "text-decoration-color" => [
                "decoration-inherit" => "text-decoration-color: inherit;",
                "decoration-current" => "text-decoration-color: currentColor;",
                "decoration-transparent" => "text-decoration-color: transparent;",
            ],
            "text-decoration-style" => [
                "decoration-solid" => "text-decoration-style: solid;",
                "decoration-double" => "text-decoration-style: double;",
                "decoration-dotted" => "text-decoration-style: dotted;",
                "decoration-dashed" => "text-decoration-style: dashed;",
                "decoration-wavy" => "text-decoration-style: wavy;",
            ],
            "text-decoration-thickness" => [
                "decoration-auto" => "text-decoration-thickness: auto;",
                "decoration-from-font" => "text-decoration-thickness: from-font;",
                "decoration-0" => "text-decoration-thickness: 0;",
                "decoration-1" => "text-decoration-thickness: 1px;",
                "decoration-2" => "text-decoration-thickness: 2px;",
                "decoration-4" => "text-decoration-thickness: 4px;",
                "decoration-8" => "text-decoration-thickness: 8px;",
            ],
            "text-underline-offset" => [
                "underline-offset-auto" => "text-underline-offset: auto;",
                "underline-offset-0" => "text-underline-offset: 0;",
                "underline-offset-1" => "text-underline-offset: 1px;",
                "underline-offset-2" => "text-underline-offset: 2px;",
                "underline-offset-4" => "text-underline-offset: 4px;",
                "underline-offset-8" => "text-underline-offset: 8px;",
            ],
            "text-transform" => [
                "uppercase" => "text-transform: uppercase;",
                "lowercase" => "text-transform: lowercase;",
                "capitalize" => "text-transform: capitalize;",
                "normal-case" => "text-transform: none;",
            ],
            "text-overflow" => [
                "truncate" => "text-overflow: ellipsis;",
                "text-ellipsis" => "text-overflow: ellipsis;",
                "text-clip" => "text-overflow: clip;",
            ],
            "text-indent" => [
                "indent-0" => "text-indent: 0;",
                "indent-px" => "text-indent: 1px;",
                "indent-0.5" => "text-indent: 0.125rem;", // 2px
                "indent-1" => "text-indent: 0.25rem;", // 4px
                "indent-1.5" => "text-indent: 0.375rem;", // 6px
                "indent-2" => "text-indent: 0.5rem;", // 8px
                "indent-2.5" => "text-indent: 0.625rem;", // 10px
                "indent-3" => "text-indent: 0.75rem;", // 12px
                "indent-3.5" => "text-indent: 0.875rem;", // 14px
                "indent-4" => "text-indent: 1rem;", // 16px
                "indent-5" => "text-indent: 1.25rem;", // 20px
                "indent-6" => "text-indent: 1.5rem;", // 24px
                "indent-7" => "text-indent: 1.75rem;", // 28px
                "indent-8" => "text-indent: 2rem;", // 32px
                "indent-9" => "text-indent: 2.25rem;", // 36px
                "indent-10" => "text-indent: 2.5rem;", // 40px
                "indent-11" => "text-indent: 2.75rem;", // 44px
                "indent-12" => "text-indent: 3rem;", // 48px
                "indent-14" => "text-indent: 3.5rem;", // 56px
                "indent-16" => "text-indent: 4rem;", // 64px
                "indent-20" => "text-indent: 5rem;", // 80px
                "indent-24" => "text-indent: 6rem;", // 96px
                "indent-28" => "text-indent: 7rem;", // 112px
                "indent-32" => "text-indent: 8rem;", // 128px
                "indent-36" => "text-indent: 9rem;", // 144px
                "indent-40" => "text-indent: 10rem;", // 160px
                "indent-44" => "text-indent: 11rem;", // 176px
                "indent-48" => "text-indent: 12rem;", // 192px
                "indent-52" => "text-indent: 13rem;", // 208px
                "indent-56" => "text-indent: 14rem;", // 224px
                "indent-60" => "text-indent: 15rem;", // 240px
                "indent-64" => "text-indent: 16rem;", // 256px
                "indent-72" => "text-indent: 18rem;", // 288px
                "indent-80" => "text-indent: 20rem;", // 320px
                "indent-96" => "text-indent: 24rem;", // 384px
            ],

            "vertical-align" => [
                "align-baseline" => "vertical-align: baseline;",
                "align-top" => "vertical-align: top;",
                "align-middle" => "vertical-align: middle;",
                "align-bottom" => "vertical-align: bottom;",
                "align-text-top" => "vertical-align: text-top;",
                "align-text-bottom" => "vertical-align: text-bottom;",
                "align-sub" => "vertical-align: sub;",
                "align-super" => "vertical-align: super;",
            ],

            "whitespace" => [
                "whitespace-normal" => "white-space: normal;",
                "whitespace-nowrap" => "white-space: nowrap;",
                "whitespace-pre" => "white-space: pre;",
                "whitespace-pre-line" => "white-space: pre-line;",
                "whitespace-pre-wrap" => "white-space: pre-wrap;",
                "whitespace-break-spaces" => "white-space: break-spaces;",
            ],

            "word-break" => [
                "break-normal" => "word-break: normal;",
                "break-words" => "word-break: break-word;", // Note: CSS3 standard is 'break-word'
                "break-all" => "word-break: break-all;",
                "break-keep" => "word-break: keep-all;", // This is not a standard CSS value but used in some cases
            ],

            "hyphens" => [
                "hyphens-none" => "hyphens: none;",
                "hyphens-manual" => "hyphens: manual;",
                "hyphens-auto" => "hyphens: auto;",
            ],

            "content" => [
                "content-none" => "content: none;",
            ],
        ];

        $this->createStyles('Typography', $typography);

        $backgrounds = [
            "background-attachment" => [
                "bg-fixed" => "background-attachment: fixed;",
                "bg-local" => "background-attachment: local;",
                "bg-scroll" => "background-attachment: scroll;",
            ],

            "background-clip" => [
                "bg-clip-border" => "background-clip: border-box;",
                "bg-clip-padding" => "background-clip: padding-box;",
                "bg-clip-content" => "background-clip: content-box;",
                "bg-clip-text" => "background-clip: text;", // Note: 'background-clip: text' is typically used with text color gradients and may require vendor prefixes
            ],

            "background-color" => [
                "bg-inherit" => "background-color: inherit;",
                "bg-current" => "background-color: currentColor;",
                "bg-transparent" => "background-color: transparent;",
            ],

            "background-origin" => [
                "bg-origin-border" => "background-origin: border-box;",
                "bg-origin-padding" => "background-origin: padding-box;",
                "bg-origin-content" => "background-origin: content-box;",
            ],

            "background-position" => [
                "bg-bottom" => "background-position: bottom;",
                "bg-center" => "background-position: center;",
                "bg-left" => "background-position: left;",
                "bg-left-bottom" => "background-position: left bottom;",
                "bg-left-top" => "background-position: left top;",
                "bg-right" => "background-position: right;",
                "bg-right-bottom" => "background-position: right bottom;",
                "bg-right-top" => "background-position: right top;",
                "bg-top" => "background-position: top;",
            ],

            "background-repeat" => [
                "bg-repeat" => "background-repeat: repeat;",
                "bg-no-repeat" => "background-repeat: no-repeat;",
                "bg-repeat-x" => "background-repeat: repeat-x;",
                "bg-repeat-y" => "background-repeat: repeat-y;",
                "bg-repeat-round" => "background-repeat: round;",
                "bg-repeat-space" => "background-repeat: space;",
            ],

            "background-size" => [
                "bg-auto" => "background-size: auto;",
                "bg-cover" => "background-size: cover;",
                "bg-contain" => "background-size: contain;",
            ],

            "background-image" => [
                "bg-none" => "background-image: none;",
                "bg-gradient-to-t" => "background-image: linear-gradient(to top, var(--tw-gradient-stops));",
                "bg-gradient-to-tr" => "background-image: linear-gradient(to top right, var(--tw-gradient-stops));",
                "bg-gradient-to-r" => "background-image: linear-gradient(to right, var(--tw-gradient-stops));",
                "bg-gradient-to-br" => "background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));",
                "bg-gradient-to-b" => "background-image: linear-gradient(to bottom, var(--tw-gradient-stops));",
                "bg-gradient-to-bl" => "background-image: linear-gradient(to bottom left, var(--tw-gradient-stops));",
                "bg-gradient-to-l" => "background-image: linear-gradient(to left, var(--tw-gradient-stops));",
                "bg-gradient-to-tl" => "background-image: linear-gradient(to top left, var(--tw-gradient-stops));",
            ],

            // TODO: Kigathi - August 31 2024 - Figure out how to deal with css variables
            "gradient-color-stops" => [
                "from-inherit" => "background-image: linear-gradient(var(--tw-gradient-stops));",
                "from-current" => "background-image: linear-gradient(var(--tw-gradient-stops));",
                "from-transparent" => "background-image: linear-gradient(var(--tw-gradient-stops));",
            ],
        ];

        $this->createStyles('Backgrounds', $backgrounds);

        $borders = [
            "border-radius" => [
                "rounded-none" => "border-radius: 0;",
                "rounded-sm" => "border-radius: 0.125rem;",
                "rounded" => "border-radius: 0.25rem;",
                "rounded-md" => "border-radius: 0.375rem;",
                "rounded-lg" => "border-radius: 0.5rem;",
                "rounded-xl" => "border-radius: 0.75rem;",
                "rounded-2xl" => "border-radius: 1rem;",
                "rounded-3xl" => "border-radius: 1.5rem;",
                "rounded-full" => "border-radius: 9999px;",

                "rounded-s-none" => "border-radius: 0;",
                "rounded-s-sm" => "border-radius: 0.125rem;",
                "rounded-s" => "border-radius: 0.25rem;",
                "rounded-s-md" => "border-radius: 0.375rem;",
                "rounded-s-lg" => "border-radius: 0.5rem;",
                "rounded-s-xl" => "border-radius: 0.75rem;",
                "rounded-s-2xl" => "border-radius: 1rem;",
                "rounded-s-3xl" => "border-radius: 1.5rem;",
                "rounded-s-full" => "border-radius: 9999px;",

                "rounded-e-none" => "border-radius: 0;",
                "rounded-e-sm" => "border-radius: 0.125rem;",
                "rounded-e" => "border-radius: 0.25rem;",
                "rounded-e-md" => "border-radius: 0.375rem;",
                "rounded-e-lg" => "border-radius: 0.5rem;",
                "rounded-e-xl" => "border-radius: 0.75rem;",
                "rounded-e-2xl" => "border-radius: 1rem;",
                "rounded-e-3xl" => "border-radius: 1.5rem;",
                "rounded-e-full" => "border-radius: 9999px;",

                "rounded-t-none" => "border-top-left-radius: 0; border-top-right-radius: 0;",
                "rounded-t-sm" => "border-top-left-radius: 0.125rem; border-top-right-radius: 0.125rem;",
                "rounded-t" => "border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem;",
                "rounded-t-md" => "border-top-left-radius: 0.375rem; border-top-right-radius: 0.375rem;",
                "rounded-t-lg" => "border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem;",
                "rounded-t-xl" => "border-top-left-radius: 0.75rem; border-top-right-radius: 0.75rem;",
                "rounded-t-2xl" => "border-top-left-radius: 1rem; border-top-right-radius: 1rem;",
                "rounded-t-3xl" => "border-top-left-radius: 1.5rem; border-top-right-radius: 1.5rem;",
                "rounded-t-full" => "border-top-left-radius: 9999px; border-top-right-radius: 9999px;",

                "rounded-r-none" => "border-top-right-radius: 0; border-bottom-right-radius: 0;",
                "rounded-r-sm" => "border-top-right-radius: 0.125rem; border-bottom-right-radius: 0.125rem;",
                "rounded-r" => "border-top-right-radius: 0.25rem; border-bottom-right-radius: 0.25rem;",
                "rounded-r-md" => "border-top-right-radius: 0.375rem; border-bottom-right-radius: 0.375rem;",
                "rounded-r-lg" => "border-top-right-radius: 0.5rem; border-bottom-right-radius: 0.5rem;",
                "rounded-r-xl" => "border-top-right-radius: 0.75rem; border-bottom-right-radius: 0.75rem;",
                "rounded-r-2xl" => "border-top-right-radius: 1rem; border-bottom-right-radius: 1rem;",
                "rounded-r-3xl" => "border-top-right-radius: 1.5rem; border-bottom-right-radius: 1.5rem;",
                "rounded-r-full" => "border-top-right-radius: 9999px; border-bottom-right-radius: 9999px;",

                "rounded-b-none" => "border-bottom-left-radius: 0; border-bottom-right-radius: 0;",
                "rounded-b-sm" => "border-bottom-left-radius: 0.125rem; border-bottom-right-radius: 0.125rem;",
                "rounded-b" => "border-bottom-left-radius: 0.25rem; border-bottom-right-radius: 0.25rem;",
                "rounded-b-md" => "border-bottom-left-radius: 0.375rem; border-bottom-right-radius: 0.375rem;",
                "rounded-b-lg" => "border-bottom-left-radius: 0.5rem; border-bottom-right-radius: 0.5rem;",
                "rounded-b-xl" => "border-bottom-left-radius: 0.75rem; border-bottom-right-radius: 0.75rem;",
                "rounded-b-2xl" => "border-bottom-left-radius: 1rem; border-bottom-right-radius: 1rem;",
                "rounded-b-3xl" => "border-bottom-left-radius: 1.5rem; border-bottom-right-radius: 1.5rem;",
                "rounded-b-full" => "border-bottom-left-radius: 9999px; border-bottom-right-radius: 9999px;",

                "rounded-l-none" => "border-top-left-radius: 0; border-bottom-left-radius: 0;",
                "rounded-l-sm" => "border-top-left-radius: 0.125rem; border-bottom-left-radius: 0.125rem;",
                "rounded-l" => "border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem;",
                "rounded-l-md" => "border-top-left-radius: 0.375rem; border-bottom-left-radius: 0.375rem;",
                "rounded-l-lg" => "border-top-left-radius: 0.5rem; border-bottom-left-radius: 0.5rem;",
                "rounded-l-xl" => "border-top-left-radius: 0.75rem; border-bottom-left-radius: 0.75rem;",
                "rounded-l-2xl" => "border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;",
                "rounded-l-3xl" => "border-top-left-radius: 1.5rem; border-bottom-left-radius: 1.5rem;",
                "rounded-l-full" => "border-top-left-radius: 9999px; border-bottom-left-radius: 9999px;",

                "rounded-ss-none" => "border-top-left-radius: 0; border-bottom-left-radius: 0;",
                "rounded-ss-sm" => "border-top-left-radius: 0.125rem; border-bottom-left-radius: 0.125rem;",
                "rounded-ss" => "border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem;",
                "rounded-ss-md" => "border-top-left-radius: 0.375rem; border-bottom-left-radius: 0.375rem;",
                "rounded-ss-lg" => "border-top-left-radius: 0.5rem; border-bottom-left-radius: 0.5rem;",
                "rounded-ss-xl" => "border-top-left-radius: 0.75rem; border-bottom-left-radius: 0.75rem;",
                "rounded-ss-2xl" => "border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;",
                "rounded-ss-3xl" => "border-top-left-radius: 1.5rem; border-bottom-left-radius: 1.5rem;",
                "rounded-ss-full" => "border-top-left-radius: 9999px; border-bottom-left-radius: 9999px;",

                "rounded-se-none" => "border-top-right-radius: 0; border-bottom-left-radius: 0;",
                "rounded-se-sm" => "border-top-right-radius: 0.125rem; border-bottom-left-radius: 0.125rem;",
                "rounded-se" => "border-top-right-radius: 0.25rem; border-bottom-left-radius: 0.25rem;",
                "rounded-se-md" => "border-top-right-radius: 0.375rem; border-bottom-left-radius: 0.375rem;",
                "rounded-se-lg" => "border-top-right-radius: 0.5rem; border-bottom-left-radius: 0.5rem;",
                "rounded-se-xl" => "border-top-right-radius: 0.75rem; border-bottom-left-radius: 0.75rem;",
                "rounded-se-2xl" => "border-top-right-radius: 1rem; border-bottom-left-radius: 1rem;",
                "rounded-se-3xl" => "border-top-right-radius: 1.5rem; border-bottom-left-radius: 1.5rem;",
                "rounded-se-full" => "border-top-right-radius: 9999px; border-bottom-left-radius: 9999px;",

                "rounded-ee-none" => "border-top-right-radius: 0; border-bottom-right-radius: 0;",
                "rounded-ee-sm" => "border-top-right-radius: 0.125rem; border-bottom-right-radius: 0.125rem;",
                "rounded-ee" => "border-top-right-radius: 0.25rem; border-bottom-right-radius: 0.25rem;",
                "rounded-ee-md" => "border-top-right-radius: 0.375rem; border-bottom-right-radius: 0.375rem;",
                "rounded-ee-lg" => "border-top-right-radius: 0.5rem; border-bottom-right-radius: 0.5rem;",
                "rounded-ee-xl" => "border-top-right-radius: 0.75rem; border-bottom-right-radius: 0.75rem;",
                "rounded-ee-2xl" => "border-top-right-radius: 1rem; border-bottom-right-radius: 1rem;",
                "rounded-ee-3xl" => "border-top-right-radius: 1.5rem; border-bottom-right-radius: 1.5rem;",
                "rounded-ee-full" => "border-top-right-radius: 9999px; border-bottom-right-radius: 9999px;",

                "rounded-es-none" => "border-top-right-radius: 0; border-bottom-left-radius: 0;",
                "rounded-es-sm" => "border-top-right-radius: 0.125rem; border-bottom-left-radius: 0.125rem;",
                "rounded-es" => "border-top-right-radius: 0.25rem; border-bottom-left-radius: 0.25rem;",
                "rounded-es-md" => "border-top-right-radius: 0.375rem; border-bottom-left-radius: 0.375rem;",
                "rounded-es-lg" => "border-top-right-radius: 0.5rem; border-bottom-left-radius: 0.5rem;",
                "rounded-es-xl" => "border-top-right-radius: 0.75rem; border-bottom-left-radius: 0.75rem;",
                "rounded-es-2xl" => "border-top-right-radius: 1rem; border-bottom-left-radius: 1rem;",
                "rounded-es-3xl" => "border-top-right-radius: 1.5rem; border-bottom-left-radius: 1.5rem;",
                "rounded-es-full" => "border-top-right-radius: 9999px; border-bottom-left-radius: 9999px;",

                "rounded-tl-none" => "border-top-left-radius: 0;",
                "rounded-tl-sm" => "border-top-left-radius: 0.125rem;",
                "rounded-tl" => "border-top-left-radius: 0.25rem;",
                "rounded-tl-md" => "border-top-left-radius: 0.375rem;",
                "rounded-tl-lg" => "border-top-left-radius: 0.5rem;",
                "rounded-tl-xl" => "border-top-left-radius: 0.75rem;",
                "rounded-tl-2xl" => "border-top-left-radius: 1rem;",
                "rounded-tl-3xl" => "border-top-left-radius: 1.5rem;",
                "rounded-tl-full" => "border-top-left-radius: 9999px;",

                "rounded-tr-none" => "border-top-right-radius: 0;",
                "rounded-tr-sm" => "border-top-right-radius: 0.125rem;",
                "rounded-tr" => "border-top-right-radius: 0.25rem;",
                "rounded-tr-md" => "border-top-right-radius: 0.375rem;",
                "rounded-tr-lg" => "border-top-right-radius: 0.5rem;",
                "rounded-tr-xl" => "border-top-right-radius: 0.75rem;",
                "rounded-tr-2xl" => "border-top-right-radius: 1rem;",
                "rounded-tr-3xl" => "border-top-right-radius: 1.5rem;",
                "rounded-tr-full" => "border-top-right-radius: 9999px;",

                "rounded-br-none" => "border-bottom-right-radius: 0;",
                "rounded-br-sm" => "border-bottom-right-radius: 0.125rem;",
                "rounded-br" => "border-bottom-right-radius: 0.25rem;",
                "rounded-br-md" => "border-bottom-right-radius: 0.375rem;",
                "rounded-br-lg" => "border-bottom-right-radius: 0.5rem;",
                "rounded-br-xl" => "border-bottom-right-radius: 0.75rem;",
                "rounded-br-2xl" => "border-bottom-right-radius: 1rem;",
                "rounded-br-3xl" => "border-bottom-right-radius: 1.5rem;",
                "rounded-br-full" => "border-bottom-right-radius: 9999px;",

                "rounded-bl-none" => "border-bottom-left-radius: 0;",
                "rounded-bl-sm" => "border-bottom-left-radius: 0.125rem;",
                "rounded-bl" => "border-bottom-left-radius: 0.25rem;",
                "rounded-bl-md" => "border-bottom-left-radius: 0.375rem;",
                "rounded-bl-lg" => "border-bottom-left-radius: 0.5rem;",
                "rounded-bl-xl" => "border-bottom-left-radius: 0.75rem;",
                "rounded-bl-2xl" => "border-bottom-left-radius: 1rem;",
                "rounded-bl-3xl" => "border-bottom-left-radius: 1.5rem;",
                "rounded-bl-full" => "border-bottom-left-radius: 9999px;",
            ],
            "border-width" => [
                "border-0" => "border-width: 0;",
                "border-2" => "border-width: 2px;",
                "border-4" => "border-width: 4px;",
                "border-8" => "border-width: 8px;",
                "border" => "border-width: 1px;", // Assuming a default border-width

                "border-x-0" => "border-left-width: 0; border-right-width: 0;",
                "border-x-2" => "border-left-width: 2px; border-right-width: 2px;",
                "border-x-4" => "border-left-width: 4px; border-right-width: 4px;",
                "border-x-8" => "border-left-width: 8px; border-right-width: 8px;",
                "border-x" => "border-left-width: 1px; border-right-width: 1px;", // Assuming a default border-width

                "border-y-0" => "border-top-width: 0; border-bottom-width: 0;",
                "border-y-2" => "border-top-width: 2px; border-bottom-width: 2px;",
                "border-y-4" => "border-top-width: 4px; border-bottom-width: 4px;",
                "border-y-8" => "border-top-width: 8px; border-bottom-width: 8px;",
                "border-y" => "border-top-width: 1px; border-bottom-width: 1px;", // Assuming a default border-width

                "border-s-0" => "border-start-width: 0;",
                "border-s-2" => "border-start-width: 2px;",
                "border-s-4" => "border-start-width: 4px;",
                "border-s-8" => "border-start-width: 8px;",
                "border-s" => "border-start-width: 1px;", // Assuming a default border-width

                "border-e-0" => "border-end-width: 0;",
                "border-e-2" => "border-end-width: 2px;",
                "border-e-4" => "border-end-width: 4px;",
                "border-e-8" => "border-end-width: 8px;",
                "border-e" => "border-end-width: 1px;", // Assuming a default border-width

                "border-t-0" => "border-top-width: 0;",
                "border-t-2" => "border-top-width: 2px;",
                "border-t-4" => "border-top-width: 4px;",
                "border-t-8" => "border-top-width: 8px;",
                "border-t" => "border-top-width: 1px;", // Assuming a default border-width

                "border-r-0" => "border-right-width: 0;",
                "border-r-2" => "border-right-width: 2px;",
                "border-r-4" => "border-right-width: 4px;",
                "border-r-8" => "border-right-width: 8px;",
                "border-r" => "border-right-width: 1px;", // Assuming a default border-width

                "border-b-0" => "border-bottom-width: 0;",
                "border-b-2" => "border-bottom-width: 2px;",
                "border-b-4" => "border-bottom-width: 4px;",
                "border-b-8" => "border-bottom-width: 8px;",
                "border-b" => "border-bottom-width: 1px;", // Assuming a default border-width

                "border-l-0" => "border-left-width: 0;",
                "border-l-2" => "border-left-width: 2px;",
                "border-l-4" => "border-left-width: 4px;",
                "border-l-8" => "border-left-width: 8px;",
                "border-l" => "border-left-width: 1px;", // Assuming a default border-width
            ],
            "border-color" => [
                "border-inherit" => "border-color: inherit;",
                "border-current" => "border-color: currentColor;",
                "border-transparent" => "border-color: transparent;",

                "border-x-inherit" => "border-left-color: inherit; border-right-color: inherit;",
                "border-x-current" => "border-left-color: currentColor; border-right-color: currentColor;",
                "border-x-transparent" => "border-left-color: transparent; border-right-color: transparent;",

                "border-y-inherit" => "border-top-color: inherit; border-bottom-color: inherit;",
                "border-y-current" => "border-top-color: currentColor; border-bottom-color: currentColor;",
                "border-y-transparent" => "border-top-color: transparent; border-bottom-color: transparent;",

                "border-s-inherit" => "border-start-color: inherit;",
                "border-s-current" => "border-start-color: currentColor;",
                "border-s-transparent" => "border-start-color: transparent;",

                "border-e-inherit" => "border-end-color: inherit;",
                "border-e-current" => "border-end-color: currentColor;",
                "border-e-transparent" => "border-end-color: transparent;",

                "border-t-inherit" => "border-top-color: inherit;",
                "border-t-current" => "border-top-color: currentColor;",
                "border-t-transparent" => "border-top-color: transparent;",

                "border-r-inherit" => "border-right-color: inherit;",
                "border-r-current" => "border-right-color: currentColor;",
                "border-r-transparent" => "border-right-color: transparent;",

                "border-b-inherit" => "border-bottom-color: inherit;",
                "border-b-current" => "border-bottom-color: currentColor;",
                "border-b-transparent" => "border-bottom-color: transparent;",

                "border-l-inherit" => "border-left-color: inherit;",
                "border-l-current" => "border-left-color: currentColor;",
                "border-l-transparent" => "border-left-color: transparent;",
            ],
            "border-style" => [
                "border-solid" => "border-style: solid;",
                "border-dashed" => "border-style: dashed;",
                "border-dotted" => "border-style: dotted;",
                "border-double" => "border-style: double;",
                "border-hidden" => "border-style: hidden;",
                "border-none" => "border-style: none;",
            ],
            "divide-width" => [
                "divide-x-0" => "border-right-width: 0px;border-left-width: 0px;",
                "divide-x-2" => "border-right-width: 0px;border-left-width: 2px;",
                "divide-x-4" => "border-right-width: 0px;border-left-width: 4px;",
                "divide-x-8" => "border-right-width: 0px;border-left-width: 8px;",
                "divide-x" => "border-right-width: 0px;border-left-width: 1px;",

                "divide-x-reverse" => "--tw-divide-x-reverse: 1;",

                "divide-y-0" => "border-top-width: 0px;border-bottom-width: 0px;",
                "divide-y-2" => "border-top-width: 2px;border-bottom-width: 0px;",
                "divide-y-4" => "border-top-width: 4px;border-bottom-width: 0px;",
                "divide-y-8" => "border-top-width: 8px;border-bottom-width: 0px;",
                "divide-y" => "border-top-width: 1px;border-bottom-width: 0px;",

                "divide-y-reverse" => "--tw-divide-y-reverse: 1;",
            ],

            "divide-color" => [
                "divide-inherit" => "border-color: inherit;", // Inherits the color from the parent element
                "divide-current" => "border-color: currentColor;", // Uses the current text color
                "divide-transparent" => "border-color: transparent;", // Sets the divide color to transparent
            ],

            "divide-style" => [
                "divide-solid" => "border-style: solid;", // Sets the dividing line to be solid
                "divide-dashed" => "border-style: dashed;", // Sets the dividing line to be dashed
                "divide-dotted" => "border-style: dotted;", // Sets the dividing line to be dotted
                "divide-double" => "border-style: double;", // Sets the dividing line to be double
                "divide-none" => "border-style: none;", // Removes the dividing line
            ],

            "outline-width" => [
                "outline-0" => "outline-width: 0;",
                "outline-1" => "outline-width: 1px;",
                "outline-2" => "outline-width: 2px;",
                "outline-4" => "outline-width: 4px;",
                "outline-8" => "outline-width: 8px;",
            ],

            "outline-color" => [
                "outline-inherit" => "outline-color: inherit;", // Inherits the outline color from its parent
                "outline-current" => "outline-color: currentColor;", // Uses the current text color as the outline color
                "outline-transparent" => "outline-color: transparent;", // Makes the outline color transparent
            ],

            "outline-style" => [
                "outline-none" => "outline-style: none;", // Removes the outline
                "outline" => "outline-style: solid;", // Sets the outline to be solid
                "outline-dashed" => "outline-style: dashed;", // Sets the outline to be dashed
                "outline-dotted" => "outline-style: dotted;", // Sets the outline to be dotted
                "outline-double" => "outline-style: double;", // Sets the outline to be double
            ],

            "outline-offset" => [
                "outline-offset-0" => "outline-offset: 0px;",
                "outline-offset-1" => "outline-offset: 1px;",
                "outline-offset-2" => "outline-offset: 2px;",
                "outline-offset-4" => "outline-offset: 4px;",
                "outline-offset-8" => "outline-offset: 8px;",
            ],

            "ring-width" => [
                "ring-0" => "box-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);",
                "ring-1" => "box-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);",
                "ring-2" => "box-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);",
                "ring" => "box-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);",
                "ring-4" => "box-shadow: var(--tw-ring-inset) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);",
                "ring-8" => "box-shadow: var(--tw-ring-inset) 0 0 0 calc(8px + var(--tw-ring-offset-width)) var(--tw-ring-color);",
                "ring-inset" => "--tw-ring-inset: inset;",

            ],

            "ring-color" => [
                "ring-inherit" => "--tw-ring-color: inherit;",
                "ring-current" => "--tw-ring-color: currentColor;",
                "ring-transparent" => "--tw-ring-color: transparent;",
            ],

            "ring-offset-width" => [
                "ring-offset-0" => "--tw-ring-offset-width: 0px;box-shadow: 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color), var(--tw-ring-shadow);",
                "ring-offset-1" => "--tw-ring-offset-width: 1px;box-shadow: 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color), var(--tw-ring-shadow);",
                "ring-offset-2" => "--tw-ring-offset-width: 2px;box-shadow: 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color), var(--tw-ring-shadow);",
                "ring-offset-4" => "--tw-ring-offset-width: 4px;box-shadow: 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color), var(--tw-ring-shadow);",
                "ring-offset-8" => "--tw-ring-offset-width: 8px;box-shadow: 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color), var(--tw-ring-shadow);",
            ],

            "ring-offset-color" => [
                "ring-offset-inherit" => "--tw-ring-offset-color: inherit;box-shadow: 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color), var(--tw-ring-shadow);",
                "ring-offset-current" => "--tw-ring-offset-color: currentColor;box-shadow: 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color), var(--tw-ring-shadow);",
                "ring-offset-transparent" => "--tw-ring-offset-color: transparent;box-shadow: 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color), var(--tw-ring-shadow);",
            ],
        ];

        $this->createStyles('Borders', $borders);

        $effects = [
            "box-shadow" => [
                "shadow" => "box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);",
                "shadow-sm" => "box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);",
                "shadow-md" => "box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);",
                "shadow-lg" => "box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);",
                "shadow-xl" => "box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);",
                "shadow-2xl" => "box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);",
                "shadow-inner" => "box-shadow: inset 0 2px 4px 0 rgb(0 0 0 / 0.05);",
                "shadow-none" => "box-shadow: 0 0 #0000;",
            ],

            "box-shadow-color" => [
                "shadow-inherit" => "--tw-shadow-color:: inherit;",
                "shadow-current" => "--tw-shadow-color:: currentColor;",
                "shadow-transparent" => "--tw-shadow-color:: transparent;",
            ],

            "opacity" => [
                "opacity-0" => "opacity: 0;",
                "opacity-5" => "opacity: 0.05;",
                "opacity-10" => "opacity: 0.1;",
                "opacity-15" => "opacity: 0.15;",
                "opacity-20" => "opacity: 0.2;",
                "opacity-25" => "opacity: 0.25;",
                "opacity-30" => "opacity: 0.3;",
                "opacity-35" => "opacity: 0.35;",
                "opacity-40" => "opacity: 0.4;",
                "opacity-45" => "opacity: 0.45;",
                "opacity-50" => "opacity: 0.5;",
                "opacity-55" => "opacity: 0.55;",
                "opacity-60" => "opacity: 0.6;",
                "opacity-65" => "opacity: 0.65;",
                "opacity-70" => "opacity: 0.7;",
                "opacity-75" => "opacity: 0.75;",
                "opacity-80" => "opacity: 0.8;",
                "opacity-85" => "opacity: 0.85;",
                "opacity-90" => "opacity: 0.9;",
                "opacity-95" => "opacity: 0.95;",
                "opacity-100" => "opacity: 1;",
            ],

            "mix-blend-mode" => [
                "mix-blend-normal" => "mix-blend-mode: normal;", //
                "mix-blend-multiply" => "mix-blend-mode: multiply;", //
                "mix-blend-screen" => "mix-blend-mode: screen;", //
                "mix-blend-overlay" => "mix-blend-mode: overlay;", //
                "mix-blend-darken" => "mix-blend-mode: darken;", //
                "mix-blend-lighten" => "mix-blend-mode: lighten;", //
                "mix-blend-color-dodge" => "mix-blend-mode: color-dodge;", //
                "mix-blend-color-burn" => "mix-blend-mode: color-burn;", //
                "mix-blend-hard-light" => "mix-blend-mode: hard-light;", //
                "mix-blend-soft-light" => "mix-blend-mode: soft-light;", //
                "mix-blend-difference" => "mix-blend-mode: difference;",
                "mix-blend-exclusion" => "mix-blend-mode: exclusion;", //
                "mix-blend-hue" => "mix-blend-mode: hue;", //
                "mix-blend-saturation" => "mix-blend-mode: saturation;",
                "mix-blend-color" => "mix-blend-mode: color;", //
                "mix-blend-luminosity" => "mix-blend-mode: luminosity;",
                "mix-blend-plus-darker" => "mix-blend-mode: plus-darker;", //
                "mix-blend-plus-lighter" => "mix-blend-mode: plus-lighter;",
            ],

            "background-blend-mode" => [
                "bg-blend-normal" => "background-blend-mode: normal;", // Default blend mode
                "bg-blend-multiply" => "background-blend-mode: multiply;", // Multiplies the colors
                "bg-blend-screen" => "background-blend-mode: screen;", // Screen blend mode
                "bg-blend-overlay" => "background-blend-mode: overlay;", // Overlay blend mode
                "bg-blend-darken" => "background-blend-mode: darken;", // Darkens the colors
                "bg-blend-lighten" => "background-blend-mode: lighten;", // Lightens the colors
                "bg-blend-color-dodge" => "background-blend-mode: color-dodge;", // Color dodge blend mode
                "bg-blend-color-burn" => "background-blend-mode: color-burn;", // Color burn blend mode
                "bg-blend-hard-light" => "background-blend-mode: hard-light;", // Hard light blend mode
                "bg-blend-soft-light" => "background-blend-mode: soft-light;", // Soft light blend mode
                "bg-blend-difference" => "background-blend-mode: difference;", // Difference blend mode
                "bg-blend-exclusion" => "background-blend-mode: exclusion;", // Exclusion blend mode
                "bg-blend-hue" => "background-blend-mode: hue;", // Hue blend mode
                "bg-blend-saturation" => "background-blend-mode: saturation;", // Saturation blend mode
                "bg-blend-color" => "background-blend-mode: color;", // Color blend mode
                "bg-blend-luminosity" => "background-blend-mode: luminosity;", // Luminosity blend mode
            ],
        ];

        $this->createStyles('Effects', $effects);

        $filters = [
            "blur" => [
                "blur-none" => "filter: blur(0);", // No blur
                "blur-sm" => "filter: blur(4px);", // Small blur
                "blur" => "filter: blur(8px);", // Default blur
                "blur-md" => "filter: blur(12px);", // Medium blur
                "blur-lg" => "filter: blur(16px);", // Large blur
                "blur-xl" => "filter: blur(24px);", // Extra-large blur
                "blur-2xl" => "filter: blur(32px);", // 2x extra-large blur
                "blur-3xl" => "filter: blur(40px);", // 3x extra-large blur
            ],

            "brightness" => [
                "brightness-0" => "filter: brightness(0);", // Fully dark
                "brightness-50" => "filter: brightness(0.5);", // 50% brightness
                "brightness-75" => "filter: brightness(0.75);", // 75% brightness
                "brightness-90" => "filter: brightness(0.9);", // 90% brightness
                "brightness-95" => "filter: brightness(0.95);", // 95% brightness
                "brightness-100" => "filter: brightness(1);", // 100% brightness
                "brightness-105" => "filter: brightness(1.05);", // 105% brightness
                "brightness-110" => "filter: brightness(1.1);", // 110% brightness
                "brightness-125" => "filter: brightness(1.25);", // 125% brightness
                "brightness-150" => "filter: brightness(1.5);", // 150% brightness
                "brightness-200" => "filter: brightness(2);", // 200% brightness
            ],

            "contrast" => [
                "contrast-0" => "filter: contrast(0);", // Fully desaturated
                "contrast-50" => "filter: contrast(0.5);", // 50% contrast
                "contrast-75" => "filter: contrast(0.75);", // 75% contrast
                "contrast-100" => "filter: contrast(1);", // 100% contrast
                "contrast-125" => "filter: contrast(1.25);", // 125% contrast
                "contrast-150" => "filter: contrast(1.5);", // 150% contrast
                "contrast-200" => "filter: contrast(2);", // 200% contrast
            ],

            "drop-shadow" => [
                "drop-shadow-sm" => "filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.1));", // Small shadow
                "drop-shadow" => "filter: drop-shadow(4px 4px 4px rgba(0, 0, 0, 0.2));", // Default shadow
                "drop-shadow-md" => "filter: drop-shadow(6px 6px 6px rgba(0, 0, 0, 0.3));", // Medium shadow
                "drop-shadow-lg" => "filter: drop-shadow(8px 8px 8px rgba(0, 0, 0, 0.4));", // Large shadow
                "drop-shadow-xl" => "filter: drop-shadow(12px 12px 12px rgba(0, 0, 0, 0.5));", // Extra-large shadow
                "drop-shadow-2xl" => "filter: drop-shadow(16px 16px 16px rgba(0, 0, 0, 0.6));", // 2x extra-large shadow
                "drop-shadow-none" => "filter: drop-shadow(0 0 0 rgba(0, 0, 0, 0));", // No shadow
            ],

            'grayscale' => [
                "grayscale-0" => "filter: grayscale(0);", // No grayscale
                "grayscale" => "filter: grayscale(100%);", // Fully grayscale
            ],

            "hue-rotate" => [
                "hue-rotate-0" => "filter: hue-rotate(0deg);", // No hue rotation
                "hue-rotate-15" => "filter: hue-rotate(15deg);", // 15 degrees hue rotation
                "hue-rotate-30" => "filter: hue-rotate(30deg);", // 30 degrees hue rotation
                "hue-rotate-60" => "filter: hue-rotate(60deg);", // 60 degrees hue rotation
                "hue-rotate-90" => "filter: hue-rotate(90deg);", // 90 degrees hue rotation
                "hue-rotate-180" => "filter: hue-rotate(180deg);", // 180 degrees hue rotation
            ],

            "invert" => [
                "invert-0" => "filter: invert(0);", // No inversion
                "invert" => "filter: invert(100%);", // Fully inverted
            ],

            "saturate" => [
                "saturate-0" => "filter: saturate(0);", // Fully desaturated
                "saturate-50" => "filter: saturate(0.5);", // 50% saturation
                "saturate-100" => "filter: saturate(1);", // 100% saturation
                "saturate-150" => "filter: saturate(1.5);", // 150% saturation
                "saturate-200" => "filter: saturate(2);", // 200% saturation
            ],

            "sepia" => [
                "sepia-0" => "filter: sepia(0);", // No sepia effect
                "sepia" => "filter: sepia(100%);", // Fully sepia
            ],

            "backdrop-blur" => [
                "backdrop-blur-none" => "backdrop-filter: blur(0);", // No backdrop blur
                "backdrop-blur-sm" => "backdrop-filter: blur(4px);", // Small backdrop blur
                "backdrop-blur" => "backdrop-filter: blur(8px);", // Default backdrop blur
                "backdrop-blur-md" => "backdrop-filter: blur(12px);", // Medium backdrop blur
                "backdrop-blur-lg" => "backdrop-filter: blur(16px);", // Large backdrop blur
                "backdrop-blur-xl" => "backdrop-filter: blur(24px);", // Extra-large backdrop blur
                "backdrop-blur-2xl" => "backdrop-filter: blur(32px);", // 2x extra-large backdrop blur
                "backdrop-blur-3xl" => "backdrop-filter: blur(40px);", // 3x extra-large backdrop blur
            ],

            "backdrop-brightness" => [
                "backdrop-brightness-0" => "backdrop-filter: brightness(0);", // Fully dark
                "backdrop-brightness-50" => "backdrop-filter: brightness(0.5);", // 50% brightness
                "backdrop-brightness-75" => "backdrop-filter: brightness(0.75);", // 75% brightness
                "backdrop-brightness-90" => "backdrop-filter: brightness(0.9);", // 90% brightness
                "backdrop-brightness-95" => "backdrop-filter: brightness(0.95);", // 95% brightness
                "backdrop-brightness-100" => "backdrop-filter: brightness(1);", // 100% brightness
                "backdrop-brightness-105" => "backdrop-filter: brightness(1.05);", // 105% brightness
                "backdrop-brightness-110" => "backdrop-filter: brightness(1.1);", // 110% brightness
                "backdrop-brightness-125" => "backdrop-filter: brightness(1.25);", // 125% brightness
                "backdrop-brightness-150" => "backdrop-filter: brightness(1.5);", // 150% brightness
                "backdrop-brightness-200" => "backdrop-filter: brightness(2);", // 200% brightness
            ],

            "backdrop-contrast" => [
                "backdrop-contrast-0" => "backdrop-filter: contrast(0);", // Fully desaturated
                "backdrop-contrast-50" => "backdrop-filter: contrast(0.5);", // 50% contrast
                "backdrop-contrast-75" => "backdrop-filter: contrast(0.75);", // 75% contrast
                "backdrop-contrast-100" => "backdrop-filter: contrast(1);", // 100% contrast
                "backdrop-contrast-125" => "backdrop-filter: contrast(1.25);", // 125% contrast
                "backdrop-contrast-150" => "backdrop-filter: contrast(1.5);", // 150% contrast
                "backdrop-contrast-200" => "backdrop-filter: contrast(2);", // 200% contrast
            ],

            "backdrop-grayscale" => [
                "backdrop-grayscale-0" => "backdrop-filter: grayscale(0);", // No grayscale
                "backdrop-grayscale" => "backdrop-filter: grayscale(100%);", // Fully grayscale
            ],

            "backdrop-hue-rotate" => [
                "backdrop-hue-rotate-0" => "backdrop-filter: hue-rotate(0deg);", // No hue rotation
                "backdrop-hue-rotate-15" => "backdrop-filter: hue-rotate(15deg);", // 15 degrees hue rotation
                "backdrop-hue-rotate-30" => "backdrop-filter: hue-rotate(30deg);", // 30 degrees hue rotation
                "backdrop-hue-rotate-60" => "backdrop-filter: hue-rotate(60deg);", // 60 degrees hue rotation
                "backdrop-hue-rotate-90" => "backdrop-filter: hue-rotate(90deg);", // 90 degrees hue rotation
                "backdrop-hue-rotate-180" => "backdrop-filter: hue-rotate(180deg);", // 180 degrees hue rotation
            ],

            "backdrop-invert" => [
                "backdrop-invert-0" => "backdrop-filter: invert(0);", // No inversion
                "backdrop-invert" => "backdrop-filter: invert(100%);", // Fully inverted
            ],

            "backdrop-opacity" => [
                "backdrop-opacity-0" => "backdrop-filter: opacity(0);", // Fully transparent
                "backdrop-opacity-5" => "backdrop-filter: opacity(0.05);", // 5% opacity
                "backdrop-opacity-10" => "backdrop-filter: opacity(0.1);", // 10% opacity
                "backdrop-opacity-20" => "backdrop-filter: opacity(0.2);", // 20% opacity
                "backdrop-opacity-25" => "backdrop-filter: opacity(0.25);", // 25% opacity
                "backdrop-opacity-30" => "backdrop-filter: opacity(0.3);", // 30% opacity
                "backdrop-opacity-40" => "backdrop-filter: opacity(0.4);", // 40% opacity
                "backdrop-opacity-50" => "backdrop-filter: opacity(0.5);", // 50% opacity
                "backdrop-opacity-60" => "backdrop-filter: opacity(0.6);", // 60% opacity
                "backdrop-opacity-70" => "backdrop-filter: opacity(0.7);", // 70% opacity
                "backdrop-opacity-75" => "backdrop-filter: opacity(0.75);", // 75% opacity
                "backdrop-opacity-80" => "backdrop-filter: opacity(0.8);", // 80% opacity
                "backdrop-opacity-90" => "backdrop-filter: opacity(0.9);", // 90% opacity
                "backdrop-opacity-95" => "backdrop-filter: opacity(0.95);", // 95% opacity
                "backdrop-opacity-100" => "backdrop-filter: opacity(1);", // Fully opaque
            ],

            "backdrop-saturate" => [
                "backdrop-saturate-0" => "backdrop-filter: saturate(0);", // Fully desaturated
                "backdrop-saturate-50" => "backdrop-filter: saturate(0.5);", // 50% saturation
                "backdrop-saturate-100" => "backdrop-filter: saturate(1);", // 100% saturation
                "backdrop-saturate-150" => "backdrop-filter: saturate(1.5);", // 150% saturation
                "backdrop-saturate-200" => "backdrop-filter: saturate(2);", // 200% saturation
            ],

            "backdrop-sepia" => [
                "backdrop-sepia-0" => "backdrop-filter: sepia(0);", // No sepia effect
                "backdrop-sepia" => "backdrop-filter: sepia(100%);", // Fully sepia
            ],
        ];

        $this->createStyles('Filters', $filters);

        $tables = [
            "border-collapse" => [
                "border-collapse" => "border-collapse: collapse;", // Collapses table borders into a single border
                "border-separate" => "border-collapse: separate;", // Keeps table borders separate
            ],

            "border-spacing" => [
                "border-spacing-0" => "border-spacing: 0;", // No spacing
                "border-spacing-px" => "border-spacing: 1px;", // 1 pixel spacing
                "border-spacing-0.5" => "border-spacing: 0.125rem;", // 0.5 units spacing
                "border-spacing-1" => "border-spacing: 0.25rem;", // 1 unit spacing
                "border-spacing-1.5" => "border-spacing: 0.375rem;", // 1.5 units spacing
                "border-spacing-2" => "border-spacing: 0.5rem;", // 2 units spacing
                "border-spacing-2.5" => "border-spacing: 0.625rem;", // 2.5 units spacing
                "border-spacing-3" => "border-spacing: 0.75rem;", // 3 units spacing
                "border-spacing-3.5" => "border-spacing: 0.875rem;", // 3.5 units spacing
                "border-spacing-4" => "border-spacing: 1rem;", // 4 units spacing
                "border-spacing-5" => "border-spacing: 1.25rem;", // 5 units spacing
                "border-spacing-6" => "border-spacing: 1.5rem;", // 6 units spacing
                "border-spacing-7" => "border-spacing: 1.75rem;", // 7 units spacing
                "border-spacing-8" => "border-spacing: 2rem;", // 8 units spacing
                "border-spacing-9" => "border-spacing: 2.25rem;", // 9 units spacing
                "border-spacing-10" => "border-spacing: 2.5rem;", // 10 units spacing
                "border-spacing-11" => "border-spacing: 2.75rem;", // 11 units spacing
                "border-spacing-12" => "border-spacing: 3rem;", // 12 units spacing
                "border-spacing-14" => "border-spacing: 3.5rem;", // 14 units spacing
                "border-spacing-16" => "border-spacing: 4rem;", // 16 units spacing
                "border-spacing-20" => "border-spacing: 5rem;", // 20 units spacing
                "border-spacing-24" => "border-spacing: 6rem;", // 24 units spacing
                "border-spacing-28" => "border-spacing: 7rem;", // 28 units spacing
                "border-spacing-32" => "border-spacing: 8rem;", // 32 units spacing
                "border-spacing-36" => "border-spacing: 9rem;", // 36 units spacing
                "border-spacing-40" => "border-spacing: 10rem;", // 40 units spacing
                "border-spacing-44" => "border-spacing: 11rem;", // 44 units spacing
                "border-spacing-48" => "border-spacing: 12rem;", // 48 units spacing
                "border-spacing-52" => "border-spacing: 13rem;", // 52 units spacing
                "border-spacing-56" => "border-spacing: 14rem;", // 56 units spacing
                "border-spacing-60" => "border-spacing: 15rem;", // 60 units spacing
                "border-spacing-64" => "border-spacing: 16rem;", // 64 units spacing
                "border-spacing-72" => "border-spacing: 18rem;", // 72 units spacing
                "border-spacing-80" => "border-spacing: 20rem;", // 80 units spacing
                "border-spacing-96" => "border-spacing: 24rem;", // 96 units spacing

                "border-spacing-x-0" => "border-spacing: 0 0;", // No horizontal spacing
                "border-spacing-x-px" => "border-spacing: 1px 0;", // 1 pixel horizontal spacing
                "border-spacing-x-0.5" => "border-spacing: 0.125rem 0;", // 0.5 units horizontal spacing
                "border-spacing-x-1" => "border-spacing: 0.25rem 0;", // 1 unit horizontal spacing
                "border-spacing-x-1.5" => "border-spacing: 0.375rem 0;", // 1.5 units horizontal spacing
                "border-spacing-x-2" => "border-spacing: 0.5rem 0;", // 2 units horizontal spacing
                "border-spacing-x-2.5" => "border-spacing: 0.625rem 0;", // 2.5 units horizontal spacing
                "border-spacing-x-3" => "border-spacing: 0.75rem 0;", // 3 units horizontal spacing
                "border-spacing-x-3.5" => "border-spacing: 0.875rem 0;", // 3.5 units horizontal spacing
                "border-spacing-x-4" => "border-spacing: 1rem 0;", // 4 units horizontal spacing
                "border-spacing-x-5" => "border-spacing: 1.25rem 0;", // 5 units horizontal spacing
                "border-spacing-x-6" => "border-spacing: 1.5rem 0;", // 6 units horizontal spacing
                "border-spacing-x-7" => "border-spacing: 1.75rem 0;", // 7 units horizontal spacing
                "border-spacing-x-8" => "border-spacing: 2rem 0;", // 8 units horizontal spacing
                "border-spacing-x-9" => "border-spacing: 2.25rem 0;", // 9 units horizontal spacing
                "border-spacing-x-10" => "border-spacing: 2.5rem 0;", // 10 units horizontal spacing
                "border-spacing-x-11" => "border-spacing: 2.75rem 0;", // 11 units horizontal spacing
                "border-spacing-x-12" => "border-spacing: 3rem 0;", // 12 units horizontal spacing
                "border-spacing-x-14" => "border-spacing: 3.5rem 0;", // 14 units horizontal spacing
                "border-spacing-x-16" => "border-spacing: 4rem 0;", // 16 units horizontal spacing
                "border-spacing-x-20" => "border-spacing: 5rem 0;", // 20 units horizontal spacing
                "border-spacing-x-24" => "border-spacing: 6rem 0;", // 24 units horizontal spacing
                "border-spacing-x-28" => "border-spacing: 7rem 0;", // 28 units horizontal spacing
                "border-spacing-x-32" => "border-spacing: 8rem 0;", // 32 units horizontal spacing
                "border-spacing-x-36" => "border-spacing: 9rem 0;", // 36 units horizontal spacing
                "border-spacing-x-40" => "border-spacing: 10rem 0;", // 40 units horizontal spacing
                "border-spacing-x-44" => "border-spacing: 11rem 0;", // 44 units horizontal spacing
                "border-spacing-x-48" => "border-spacing: 12rem 0;", // 48 units horizontal spacing
                "border-spacing-x-52" => "border-spacing: 13rem 0;", // 52 units horizontal spacing
                "border-spacing-x-56" => "border-spacing: 14rem 0;", // 56 units horizontal spacing
                "border-spacing-x-60" => "border-spacing: 15rem 0;", // 60 units horizontal spacing
                "border-spacing-x-64" => "border-spacing: 16rem 0;", // 64 units horizontal spacing
                "border-spacing-x-72" => "border-spacing: 18rem 0;", // 72 units horizontal spacing
                "border-spacing-x-80" => "border-spacing: 20rem 0;", // 80 units horizontal spacing
                "border-spacing-x-96" => "border-spacing: 24rem 0;", // 96 units horizontal spacing

                "border-spacing-y-0" => "border-spacing: 0 0;", // No vertical spacing
                "border-spacing-y-px" => "border-spacing: 0 1px;", // 1 pixel vertical spacing
                "border-spacing-y-0.5" => "border-spacing: 0 0.125rem;", // 0.5 units vertical spacing
                "border-spacing-y-1" => "border-spacing: 0 0.25rem;", // 1 unit vertical spacing
                "border-spacing-y-1.5" => "border-spacing: 0 0.375rem;", // 1.5 units vertical spacing
                "border-spacing-y-2" => "border-spacing: 0 0.5rem;", // 2 units vertical spacing
                "border-spacing-y-2.5" => "border-spacing: 0 0.625rem;", // 2.5 units vertical spacing
                "border-spacing-y-3" => "border-spacing: 0 0.75rem;", // 3 units vertical spacing
                "border-spacing-y-3.5" => "border-spacing: 0 0.875rem;", // 3.5 units vertical spacing
                "border-spacing-y-4" => "border-spacing: 0 1rem;", // 4 units vertical spacing
                "border-spacing-y-5" => "border-spacing: 0 1.25rem;", // 5 units vertical spacing
                "border-spacing-y-6" => "border-spacing: 0 1.5rem;", // 6 units vertical spacing
                "border-spacing-y-7" => "border-spacing: 0 1.75rem;", // 7 units vertical spacing
                "border-spacing-y-8" => "border-spacing: 0 2rem;", // 8 units vertical spacing
                "border-spacing-y-9" => "border-spacing: 0 2.25rem;", // 9 units vertical spacing
                "border-spacing-y-10" => "border-spacing: 0 2.5rem;", // 10 units vertical spacing
                "border-spacing-y-11" => "border-spacing: 0 2.75rem;", // 11 units vertical spacing
                "border-spacing-y-12" => "border-spacing: 0 3rem;", // 12 units vertical spacing
                "border-spacing-y-14" => "border-spacing: 0 3.5rem;", // 14 units vertical spacing
                "border-spacing-y-16" => "border-spacing: 0 4rem;", // 16 units vertical spacing
                "border-spacing-y-20" => "border-spacing: 0 5rem;", // 20 units vertical spacing
                "border-spacing-y-24" => "border-spacing: 0 6rem;", // 24 units vertical spacing
                "border-spacing-y-28" => "border-spacing: 0 7rem;", // 28 units vertical spacing
                "border-spacing-y-32" => "border-spacing: 0 8rem;", // 32 units vertical spacing
                "border-spacing-y-36" => "border-spacing: 0 9rem;", // 36 units vertical spacing
                "border-spacing-y-40" => "border-spacing: 0 10rem;", // 40 units vertical spacing
                "border-spacing-y-44" => "border-spacing: 0 11rem;", // 44 units vertical spacing
                "border-spacing-y-48" => "border-spacing: 0 12rem;", // 48 units vertical spacing
                "border-spacing-y-52" => "border-spacing: 0 13rem;", // 52 units vertical spacing
                "border-spacing-y-56" => "border-spacing: 0 14rem;", // 56 units vertical spacing
                "border-spacing-y-60" => "border-spacing: 0 15rem;", // 60 units vertical spacing
                "border-spacing-y-64" => "border-spacing: 0 16rem;", // 64 units vertical spacing
                "border-spacing-y-72" => "border-spacing: 0 18rem;", // 72 units vertical spacing
                "border-spacing-y-80" => "border-spacing: 0 20rem;", // 80 units vertical spacing
                "border-spacing-y-96" => "border-spacing: 0 24rem;", // 96 units vertical spacing
            ],

            "table-layout" => [
                "table-auto" => "table-layout: auto;", // Default layout, allows the table to expand to fit its content
                "table-fixed" => "table-layout: fixed;", // Fixed layout, columns have a fixed width and do not expand
            ],

            "caption-side" => [
                "caption-top" => "caption-side: top;", // Places the table caption at the top
                "caption-bottom" => "caption-side: bottom;", // Places the table caption at the bottom
            ],
        ];

        $this->createStyles('Tables', $tables);

        $transitions_and_animation = [
            "transition-property" => [
                "transition-none" => "transition-property: none;", // No transition
                "transition-all" => "transition-property: all;", // Transitions all properties
                "transition" => "transition-property: all;", // Default transition for all properties
                "transition-colors" => "transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;", // Transitions color-related properties
                "transition-opacity" => "transition-property: opacity;", // Transitions opacity property
                "transition-shadow" => "transition-property: box-shadow;", // Transitions box-shadow property
                "transition-transform" => "transition-property: transform;", // Transitions transform property
            ],
            "transition-duration" => [
                "duration-0" => "transition-duration: 0ms;", // No duration
                "duration-75" => "transition-duration: 75ms;", // 75 milliseconds
                "duration-100" => "transition-duration: 100ms;", // 100 milliseconds
                "duration-150" => "transition-duration: 150ms;", // 150 milliseconds
                "duration-200" => "transition-duration: 200ms;", // 200 milliseconds
                "duration-300" => "transition-duration: 300ms;", // 300 milliseconds
                "duration-500" => "transition-duration: 500ms;", // 500 milliseconds
                "duration-700" => "transition-duration: 700ms;", // 700 milliseconds
                "duration-1000" => "transition-duration: 1000ms;", // 1000 milliseconds (1 second)
            ],
            "transition-timing-function" => [
                "ease-linear" => "transition-timing-function: linear;", // Constant speed
                "ease-in" => "transition-timing-function: ease-in;", // Starts slow, speeds up
                "ease-out" => "transition-timing-function: ease-out;", // Starts fast, slows down
                "ease-in-out" => "transition-timing-function: ease-in-out;", // Starts and ends slowly
            ],
            "transition-delay" => [
                "delay-0" => "transition-delay: 0ms;", // No delay
                "delay-75" => "transition-delay: 75ms;", // 75 milliseconds delay
                "delay-100" => "transition-delay: 100ms;", // 100 milliseconds delay
                "delay-150" => "transition-delay: 150ms;", // 150 milliseconds delay
                "delay-200" => "transition-delay: 200ms;", // 200 milliseconds delay
                "delay-300" => "transition-delay: 300ms;", // 300 milliseconds delay
                "delay-500" => "transition-delay: 500ms;", // 500 milliseconds delay
                "delay-700" => "transition-delay: 700ms;", // 700 milliseconds delay
                "delay-1000" => "transition-delay: 1000ms;", // 1000 milliseconds (1 second) delay
            ],
            "animation" => [
                "animate-none" => "animation: none;", // No animation
                "animate-spin" => "animation: spin 1s linear infinite;", // Spins an element
                "animate-ping" => "animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;", // Creates a ping effect
                "animate-pulse" => "animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;", // Pulsates an element
                "animate-bounce" => "animation: bounce 1s infinite;", // Bounces an element
            ],
        ];

        $this->createStyles('Transitions & Animation', $transitions_and_animation);

        $transforms = [
            "scale" => [
                "scale-0" => "transform: scale(0);", // Scales the element to 0% of its size
                "scale-50" => "transform: scale(0.5);", // Scales the element to 50% of its size
                "scale-75" => "transform: scale(0.75);", // Scales the element to 75% of its size
                "scale-90" => "transform: scale(0.9);", // Scales the element to 90% of its size
                "scale-95" => "transform: scale(0.95);", // Scales the element to 95% of its size
                "scale-100" => "transform: scale(1);", // Scales the element to 100% of its size (original size)
                "scale-105" => "transform: scale(1.05);", // Scales the element to 105% of its size
                "scale-110" => "transform: scale(1.1);", // Scales the element to 110% of its size
                "scale-125" => "transform: scale(1.25);", // Scales the element to 125% of its size
                "scale-150" => "transform: scale(1.5);", // Scales the element to 150% of its size

                // Individual axes
                "scale-x-0" => "transform: scaleX(0);", // Scales the element horizontally to 0%
                "scale-x-50" => "transform: scaleX(0.5);", // Scales the element horizontally to 50%
                "scale-x-75" => "transform: scaleX(0.75);", // Scales the element horizontally to 75%
                "scale-x-90" => "transform: scaleX(0.9);", // Scales the element horizontally to 90%
                "scale-x-95" => "transform: scaleX(0.95);", // Scales the element horizontally to 95%
                "scale-x-100" => "transform: scaleX(1);", // Scales the element horizontally to 100% (original size)
                "scale-x-105" => "transform: scaleX(1.05);", // Scales the element horizontally to 105%
                "scale-x-110" => "transform: scaleX(1.1);", // Scales the element horizontally to 110%
                "scale-x-125" => "transform: scaleX(1.25);", // Scales the element horizontally to 125%
                "scale-x-150" => "transform: scaleX(1.5);", // Scales the element horizontally to 150%

                "scale-y-0" => "transform: scaleY(0);", // Scales the element vertically to 0%
                "scale-y-50" => "transform: scaleY(0.5);", // Scales the element vertically to 50%
                "scale-y-75" => "transform: scaleY(0.75);", // Scales the element vertically to 75%
                "scale-y-90" => "transform: scaleY(0.9);", // Scales the element vertically to 90%
                "scale-y-95" => "transform: scaleY(0.95);", // Scales the element vertically to 95%
                "scale-y-100" => "transform: scaleY(1);", // Scales the element vertically to 100% (original size)
                "scale-y-105" => "transform: scaleY(1.05);", // Scales the element vertically to 105%
                "scale-y-110" => "transform: scaleY(1.1);", // Scales the element vertically to 110%
                "scale-y-125" => "transform: scaleY(1.25);", // Scales the element vertically to 125%
                "scale-y-150" => "transform: scaleY(1.5);", // Scales the element vertically to 150%
            ],
            "rotate" => [
                "rotate-0" => "transform: rotate(0deg);", // No rotation
                "rotate-1" => "transform: rotate(1deg);", // 1 degree rotation
                "rotate-2" => "transform: rotate(2deg);", // 2 degrees rotation
                "rotate-3" => "transform: rotate(3deg);", // 3 degrees rotation
                "rotate-6" => "transform: rotate(6deg);", // 6 degrees rotation
                "rotate-12" => "transform: rotate(12deg);", // 12 degrees rotation
                "rotate-45" => "transform: rotate(45deg);", // 45 degrees rotation
                "rotate-90" => "transform: rotate(90deg);", // 90 degrees rotation
                "rotate-180" => "transform: rotate(180deg);", // 180 degrees rotation
            ],
            "translate" => [
                // Horizontal translations
                "translate-x-0" => "transform: translateX(0);", // No translation
                "translate-x-px" => "transform: translateX(1px);", // 1 pixel translation
                "translate-x-0.5" => "transform: translateX(0.125rem);", // 0.5 unit translation
                "translate-x-1" => "transform: translateX(0.25rem);", // 1 unit translation
                "translate-x-1.5" => "transform: translateX(0.375rem);", // 1.5 unit translation
                "translate-x-2" => "transform: translateX(0.5rem);", // 2 units translation
                "translate-x-2.5" => "transform: translateX(0.625rem);", // 2.5 units translation
                "translate-x-3" => "transform: translateX(0.75rem);", // 3 units translation
                "translate-x-3.5" => "transform: translateX(0.875rem);", // 3.5 units translation
                "translate-x-4" => "transform: translateX(1rem);", // 4 units translation
                "translate-x-5" => "transform: translateX(1.25rem);", // 5 units translation
                "translate-x-6" => "transform: translateX(1.5rem);", // 6 units translation
                "translate-x-7" => "transform: translateX(1.75rem);", // 7 units translation
                "translate-x-8" => "transform: translateX(2rem);", // 8 units translation
                "translate-x-9" => "transform: translateX(2.25rem);", // 9 units translation
                "translate-x-10" => "transform: translateX(2.5rem);", // 10 units translation
                "translate-x-11" => "transform: translateX(2.75rem);", // 11 units translation
                "translate-x-12" => "transform: translateX(3rem);", // 12 units translation
                "translate-x-14" => "transform: translateX(3.5rem);", // 14 units translation
                "translate-x-16" => "transform: translateX(4rem);", // 16 units translation
                "translate-x-20" => "transform: translateX(5rem);", // 20 units translation
                "translate-x-24" => "transform: translateX(6rem);", // 24 units translation
                "translate-x-28" => "transform: translateX(7rem);", // 28 units translation
                "translate-x-32" => "transform: translateX(8rem);", // 32 units translation
                "translate-x-36" => "transform: translateX(9rem);", // 36 units translation
                "translate-x-40" => "transform: translateX(10rem);", // 40 units translation
                "translate-x-44" => "transform: translateX(11rem);", // 44 units translation
                "translate-x-48" => "transform: translateX(12rem);", // 48 units translation
                "translate-x-52" => "transform: translateX(13rem);", // 52 units translation
                "translate-x-56" => "transform: translateX(14rem);", // 56 units translation
                "translate-x-60" => "transform: translateX(15rem);", // 60 units translation
                "translate-x-64" => "transform: translateX(16rem);", // 64 units translation
                "translate-x-72" => "transform: translateX(18rem);", // 72 units translation
                "translate-x-80" => "transform: translateX(20rem);", // 80 units translation
                "translate-x-96" => "transform: translateX(24rem);", // 96 units translation

                // Vertical translations
                "translate-y-0" => "transform: translateY(0);", // No translation
                "translate-y-px" => "transform: translateY(1px);", // 1 pixel translation
                "translate-y-0.5" => "transform: translateY(0.125rem);", // 0.5 unit translation
                "translate-y-1" => "transform: translateY(0.25rem);", // 1 unit translation
                "translate-y-1.5" => "transform: translateY(0.375rem);", // 1.5 unit translation
                "translate-y-2" => "transform: translateY(0.5rem);", // 2 units translation
                "translate-y-2.5" => "transform: translateY(0.625rem);", // 2.5 units translation
                "translate-y-3" => "transform: translateY(0.75rem);", // 3 units translation
                "translate-y-3.5" => "transform: translateY(0.875rem);", // 3.5 units translation
                "translate-y-4" => "transform: translateY(1rem);", // 4 units translation
                "translate-y-5" => "transform: translateY(1.25rem);", // 5 units translation
                "translate-y-6" => "transform: translateY(1.5rem);", // 6 units translation
                "translate-y-7" => "transform: translateY(1.75rem);", // 7 units translation
                "translate-y-8" => "transform: translateY(2rem);", // 8 units translation
                "translate-y-9" => "transform: translateY(2.25rem);", // 9 units translation
                "translate-y-10" => "transform: translateY(2.5rem);", // 10 units translation
                "translate-y-11" => "transform: translateY(2.75rem);", // 11 units translation
                "translate-y-12" => "transform: translateY(3rem);", // 12 units translation
                "translate-y-14" => "transform: translateY(3.5rem);", // 14 units translation
                "translate-y-16" => "transform: translateY(4rem);", // 16 units translation
                "translate-y-20" => "transform: translateY(5rem);", // 20 units translation
                "translate-y-24" => "transform: translateY(6rem);", // 24 units translation
                "translate-y-28" => "transform: translateY(7rem);", // 28 units translation
                "translate-y-32" => "transform: translateY(8rem);", // 32 units translation
                "translate-y-36" => "transform: translateY(9rem);", // 36 units translation
                "translate-y-40" => "transform: translateY(10rem);", // 40 units translation
                "translate-y-44" => "transform: translateY(11rem);", // 44 units translation
                "translate-y-48" => "transform: translateY(12rem);", // 48 units translation
                "translate-y-52" => "transform: translateY(13rem);", // 52 units translation
                "translate-y-56" => "transform: translateY(14rem);", // 56 units translation
                "translate-y-60" => "transform: translateY(15rem);", // 60 units translation
                "translate-y-64" => "transform: translateY(16rem);", // 64 units translation
                "translate-y-72" => "transform: translateY(18rem);", // 72 units translation
                "translate-y-80" => "transform: translateY(20rem);", // 80 units translation
                "translate-y-96" => "transform: translateY(24rem);", // 96 units translation

                // Percentage-based translations
                "translate-x-1/2" => "transform: translateX(50%);", // 50% horizontal translation
                "translate-x-1/3" => "transform: translateX(33.333%);", // 33.333% horizontal translation
                "translate-x-2/3" => "transform: translateX(66.667%);", // 66.667% horizontal translation
                "translate-x-1/4" => "transform: translateX(25%);", // 25% horizontal translation
                "translate-x-2/4" => "transform: translateX(50%);", // 50% horizontal translation (same as translate-x-1/2)
                "translate-x-3/4" => "transform: translateX(75%);", // 75% horizontal translation
                "translate-x-full" => "transform: translateX(100%);", // 100% horizontal translation

                "translate-y-1/2" => "transform: translateY(50%);", // 50% vertical translation
                "translate-y-1/3" => "transform: translateY(33.333%);", // 33.333% vertical translation
                "translate-y-2/3" => "transform: translateY(66.667%);", // 66.667% vertical translation
                "translate-y-1/4" => "transform: translateY(25%);", // 25% vertical translation
                "translate-y-2/4" => "transform: translateY(50%);", // 50% vertical translation (same as translate-y-1/2)
                "translate-y-3/4" => "transform: translateY(75%);", // 75% vertical translation
                "translate-y-full" => "transform: translateY(100%);", // 100% vertical translation
            ],
            "skew" => [
                "skew-x-0" => "transform: skewX(0deg);", // No skew
                "skew-x-1" => "transform: skewX(1deg);", // 1 degree skew on X axis
                "skew-x-2" => "transform: skewX(2deg);", // 2 degrees skew on X axis
                "skew-x-3" => "transform: skewX(3deg);", // 3 degrees skew on X axis
                "skew-x-6" => "transform: skewX(6deg);", // 6 degrees skew on X axis
                "skew-x-12" => "transform: skewX(12deg);", // 12 degrees skew on X axis

                "skew-y-0" => "transform: skewY(0deg);", // No skew
                "skew-y-1" => "transform: skewY(1deg);", // 1 degree skew on Y axis
                "skew-y-2" => "transform: skewY(2deg);", // 2 degrees skew on Y axis
                "skew-y-3" => "transform: skewY(3deg);", // 3 degrees skew on Y axis
                "skew-y-6" => "transform: skewY(6deg);", // 6 degrees skew on Y axis
                "skew-y-12" => "transform: skewY(12deg);", // 12 degrees skew on Y axis
            ],
            "transform-origin" => [
                "origin-center" => "transform-origin: center;", // Transform origin at the center
                "origin-top" => "transform-origin: top;", // Transform origin at the top
                "origin-top-right" => "transform-origin: top right;", // Transform origin at the top-right corner
                "origin-right" => "transform-origin: right;", // Transform origin at the right
                "origin-bottom-right" => "transform-origin: bottom right;", // Transform origin at the bottom-right corner
                "origin-bottom" => "transform-origin: bottom;", // Transform origin at the bottom
                "origin-bottom-left" => "transform-origin: bottom left;", // Transform origin at the bottom-left corner
                "origin-left" => "transform-origin: left;", // Transform origin at the left
                "origin-top-left" => "transform-origin: top left;", // Transform origin at the top-left corner
            ],
        ];

        $this->createStyles('Transforms', $transforms);

        $interactivity = [
            "accent-color" => [
                "accent-auto" => "accent-color: auto;", // Default system or browser defined accent color
                "accent-inherit" => "accent-color: inherit;", // Inherits the accent color from its parent
                "accent-current" => "accent-color: currentColor;", // Uses the current text color as the accent color
                "accent-transparent" => "accent-color: transparent;", // Transparent accent color
                "accent-black" => "accent-color: black;", // Black accent color
                "accent-white" => "accent-color: white;", // White accent color
            ],
            "appearance" => [
                "appearance-none" => "appearance: none;", // Resets the default appearance of an element
            ],
            "cursor" => [
                "cursor-auto" => "cursor: auto;", // Default cursor based on the context
                "cursor-default" => "cursor: default;", // Default cursor (usually an arrow)
                "cursor-pointer" => "cursor: pointer;", // Pointer cursor (usually a hand)
                "cursor-wait" => "cursor: wait;", // Wait cursor (usually a spinner)
                "cursor-text" => "cursor: text;", // Text cursor (usually an I-beam)
                "cursor-move" => "cursor: move;", // Move cursor (usually four arrows)
                "cursor-help" => "cursor: help;", // Help cursor (usually a question mark)
                "cursor-not-allowed" => "cursor: not-allowed;", // Not-allowed cursor (usually a circle with a line)
                "cursor-none" => "cursor: none;", // Hides the cursor
                "cursor-context-menu" => "cursor: context-menu;", // Context menu cursor (usually a menu icon)
                "cursor-progress" => "cursor: progress;", // Progress cursor (usually a spinner)
                "cursor-cell" => "cursor: cell;", // Cell cursor (usually a cross)
                "cursor-crosshair" => "cursor: crosshair;", // Crosshair cursor (usually a cross)
                "cursor-vertical-text" => "cursor: vertical-text;", // Vertical text cursor (usually a vertical I-beam)
                "cursor-alias" => "cursor: alias;", // Alias cursor (usually a pointing hand with a document)
                "cursor-copy" => "cursor: copy;", // Copy cursor (usually a hand with a document)
                "cursor-no-drop" => "cursor: no-drop;", // No-drop cursor (usually a hand with a line through it)
                "cursor-grab" => "cursor: grab;", // Grab cursor (usually a hand with an open palm)
                "cursor-grabbing" => "cursor: grabbing;", // Grabbing cursor (usually a hand with a closed fist)
                "cursor-all-scroll" => "cursor: all-scroll;", // All-scroll cursor (usually arrows pointing in all directions)
                "cursor-col-resize" => "cursor: col-resize;", // Column resize cursor (usually arrows pointing left and right)
                "cursor-row-resize" => "cursor: row-resize;", // Row resize cursor (usually arrows pointing up and down)
                "cursor-n-resize" => "cursor: n-resize;", // North resize cursor (usually an arrow pointing up)
                "cursor-e-resize" => "cursor: e-resize;", // East resize cursor (usually an arrow pointing right)
                "cursor-s-resize" => "cursor: s-resize;", // South resize cursor (usually an arrow pointing down)
                "cursor-w-resize" => "cursor: w-resize;", // West resize cursor (usually an arrow pointing left)
                "cursor-ne-resize" => "cursor: ne-resize;", // North-East resize cursor (usually an arrow pointing diagonally up-right)
                "cursor-nw-resize" => "cursor: nw-resize;", // North-West resize cursor (usually an arrow pointing diagonally up-left)
                "cursor-se-resize" => "cursor: se-resize;", // South-East resize cursor (usually an arrow pointing diagonally down-right)
                "cursor-sw-resize" => "cursor: sw-resize;", // South-West resize cursor (usually an arrow pointing diagonally down-left)
                "cursor-ew-resize" => "cursor: ew-resize;", // East-West resize cursor (usually arrows pointing left and right)
                "cursor-ns-resize" => "cursor: ns-resize;", // North-South resize cursor (usually arrows pointing up and down)
                "cursor-nesw-resize" => "cursor: nesw-resize;", // North-East-South-West resize cursor (usually arrows pointing diagonally)
                "cursor-nwse-resize" => "cursor: nwse-resize;", // North-West-South-East resize cursor (usually arrows pointing diagonally)
                "cursor-zoom-in" => "cursor: zoom-in;", // Zoom-in cursor (usually a magnifying glass with a plus sign)
                "cursor-zoom-out" => "cursor: zoom-out;", // Zoom-out cursor (usually a magnifying glass with a minus sign)
            ],
            "caret-color" => [
                "caret-inherit" => "caret-color: inherit;", // Inherit the color from the parent element
                "caret-current" => "caret-color: currentColor;", // Use the current color of the element
                "caret-transparent" => "caret-color: transparent;", // Set the caret to be transparent
            ],
            "pointer-events" => [
                "pointer-events-none" => "pointer-events: none;", // Disables pointer events (clicks, hover, etc.)
                "pointer-events-auto" => "pointer-events: auto;", // Enables pointer events (default behavior)
            ],
            "resize" => [
                "resize-none" => "resize: none;", // Disables resizing of the element
                "resize-y" => "resize: vertical;", // Allows vertical resizing only
                "resize-x" => "resize: horizontal;", // Allows horizontal resizing only
                "resize" => "resize: both;", // Allows resizing both vertically and horizontally
            ],
            "scroll-behavior" => [
                "scroll-auto" => "scroll-behavior: auto;", // Default scroll behavior
                "scroll-smooth" => "scroll-behavior: smooth;", // Enables smooth scrolling
            ],

            // TODO: Kigathi - August 31 2024 - Create a simple model containing all sizes for margins and paddings and heights and widths:

            "scroll-margin" => [
                "scroll-m-0" => "scroll-margin: 0px;",
                //etc
            ],

            "scroll-padding" => [
                "scroll-p-0" => "scroll-padding: 0px;",
                //etc
            ],
            "scroll-snap-align" => [
                "snap-start" => "scroll-snap-align: start;", // Aligns the snap point at the start of the container
                "snap-end" => "scroll-snap-align: end;", // Aligns the snap point at the end of the container
                "snap-center" => "scroll-snap-align: center;", // Aligns the snap point at the center of the container
                "snap-align-none" => "scroll-snap-align: none;", // No specific alignment
            ],
            "scroll-snap-stop" => [
                "snap-normal" => "scroll-snap-stop: normal;", // Default behavior where snap stops are determined automatically
                "snap-always" => "scroll-snap-stop: always;", // Always snap to the nearest snap point
            ],
            "scroll-snap-type" => [
                "snap-none" => "scroll-snap-type: none;", // Disables scroll snapping
                "snap-x" => "scroll-snap-type: x mandatory;", // Enables horizontal snapping with mandatory behavior
                "snap-y" => "scroll-snap-type: y mandatory;", // Enables vertical snapping with mandatory behavior
                "snap-both" => "scroll-snap-type: both mandatory;", // Enables snapping in both directions with mandatory behavior
                "snap-mandatory" => "scroll-snap-type: mandatory;", // Enables snapping with mandatory behavior
                "snap-proximity" => "scroll-snap-type: proximity;", // Enables snapping with proximity behavior
            ],
            "touch-action" => [
                "touch-auto" => "touch-action: auto;", // Default touch behavior
                "touch-none" => "touch-action: none;", // Disables touch interactions
                "touch-pan-x" => "touch-action: pan-x;", // Enables horizontal panning
                "touch-pan-left" => "touch-action: pan-left;", // Enables leftward panning
                "touch-pan-right" => "touch-action: pan-right;", // Enables rightward panning
                "touch-pan-y" => "touch-action: pan-y;", // Enables vertical panning
                "touch-pan-up" => "touch-action: pan-up;", // Enables upward panning
                "touch-pan-down" => "touch-action: pan-down;", // Enables downward panning
                "touch-pinch-zoom" => "touch-action: pinch-zoom;", // Enables pinch-to-zoom
                "touch-manipulation" => "touch-action: manipulation;", // Enables touch-based manipulation like scrolling and zooming
            ],
            "user-select" => [
                "select-none" => "user-select: none;", // Prevents user from selecting text
                "select-text" => "user-select: text;", // Allows user to select text
                "select-all" => "user-select: all;", // Allows user to select all text
                "select-auto" => "user-select: auto;", // Default behavior (usually allows text selection)
            ],
            "will-change" => [
                "will-change-auto" => "will-change: auto;", // Default behavior for the will-change property
                "will-change-scroll" => "will-change: scroll-position;", // Optimizes scroll position changes
                "will-change-contents" => "will-change: contents;", // Optimizes content changes
                "will-change-transform" => "will-change: transform;", // Optimizes transformations
            ],
        ];

        $this->createStyles('Interactivity', $interactivity);

        $svg = [
            "fill" => [
                "fill-none" => "fill: none;", // No fill color
                "fill-inherit" => "fill: inherit;", // Inherits the fill color from the parent element
                "fill-current" => "fill: currentColor;", // Uses the current text color for filling
                "fill-transparent" => "fill: transparent;", // Fill is transparent
            ],
            "stroke" => [
                "stroke-none" => "stroke: none;", // No stroke (outline) color
                "stroke-inherit" => "stroke: inherit;", // Inherits the stroke color from the parent element
                "stroke-current" => "stroke: currentColor;", // Uses the current text color for the stroke
                "stroke-transparent" => "stroke: transparent;", // Stroke is transparent
            ],
            "stroke-width" => [
                "stroke-0" => "stroke-width: 0;",
                "stroke-1" => "stroke-width: 1;",
                "stroke-2" => "stroke-width: 2;",
            ],
        ];

        $this->createStyles('SVG', $svg);

        $accessibility = [
            "screen-readers" => [
                "sr-only" => "position: absolute; width: 1px; height: 1px; margin: -1px; padding: 0; border: 0; clip: rect(0, 0, 0, 0); overflow: hidden; clip-path: inset(100%); white-space: nowrap; /* hide element visually but keep it accessible to screen readers */",
                "not-sr-only" => "position: static; width: auto; height: auto; margin: 0; padding: 0; border: 0; clip: auto; overflow: visible; clip-path: none; white-space: normal; /* element is visible and accessible to all */",
            ],
            "forced-color-adjust" => [
                "forced-color-adjust-auto" => "forced-color-adjust: auto;",
                "forced-color-adjust-none" => "forced-color-adjust: none;",
            ],
        ];

        $this->createStyles('Accessibility', $accessibility);
    }

    public function createStyles($styleCategory, $styleCategoryTypes)
    {
        $withSpacings = ['flex-basis', 'gap', 'padding', 'margin', 'space-between', 'width', 'min-width', 'max-width', 'height', 'min-height', 'max-height', 'size', 'text-indent', 'border-spacing', 'translate'];
        $withColors = [
            'text-color' => [
                'css-prefix' => 'color',
                'class-prefix' => 'text',
            ],
            'text-decoration-color' => [
                'css-prefix' => 'text-decoration-color',
                'class-prefix' => 'decoration',
            ],
            'background-color' => [
                'css-prefix' => 'background-color',
                'class-prefix' => 'bg',
            ],
            'border-color' => [
                'css-prefix' => 'border-color',
                'class-prefix' => 'border',
                'transformations' => [
                    'x' => ['left', 'right'],
                    'y' => ['top', 'bottom'],
                    'e' => 'end',
                    't' => 'top',
                    'r' => 'right',
                    'b' => 'bottom',
                    'l' => 'left',
                ],
            ],
            'divide-color' => [
                'css-prefix' => 'border-color',
                'class-prefix' => 'divide',
            ],
            'outline-color' => [
                'css-prefix' => 'outline-color',
                'class-prefix' => 'outline',
            ],
            'ring-color' => [
                'css-prefix' => '--tw-ring-color',
                'class-prefix' => 'ring',
            ],
            'ring-offset-color' => [
                'css-prefix' => '--tw-ring-offset-color',
                'class-prefix' => 'ring-offset',
                'css-postfix' => 'box-shadow: 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color), var(--tw-ring-shadow);',
            ],
            'box-shadow-color' => [
                'css-prefix' => '--tw-shadow-color',
                'class-prefix' => 'shadow',
            ],
            'accent-color' => [
                'css-prefix' => 'accent-color',
                'class-prefix' => 'accent',
            ],
            'caret-color' => [
                'css-prefix' => 'caret-color',
                'class-prefix' => 'caret',
            ],
            'fill' => [
                'css-prefix' => 'fill',
                'class-prefix' => 'fill',
            ],
            'stroke' => [
                'css-prefix' => 'stroke',
                'class-prefix' => 'stroke',
            ],
        ];
        $styleCategory = StyleCategory::firstOrCreate(['title' => $styleCategory]);
        $allSpacings = Spacing::all();
        $allColors = Color::all();

        foreach ($styleCategoryTypes as $key => $value) {
            $styleCategoryType = StyleCategoryType::firstOrCreate(['title' => $key, 'style_category_id' => $styleCategory->id]);
            $hasSpacings = in_array($key, $withSpacings);
            $hasColors = array_key_exists($key, $withColors);

            if ($hasColors) {
                $more = [];
                if (isset($withColors[$key])) {
                    $classPrefix = $withColors[$key]['class-prefix'];
                    $cssPrefix = $withColors[$key]['css-prefix'];
                    $transformations = $withColors[$key]['transformations'] ?? [];
                    $cssPostfix = $withColors[$key]['css-postfix'] ?? null;
                    $more = $this->appendColors($allColors, $classPrefix, $cssPrefix, $transformations, $cssPostfix);
                }
                $refactoredArray = [];
                foreach ($value as $item) {
                    $refactoredArray[] = ['css' => $item, 'color_id' => null];
                }
                $value = array_merge($refactoredArray, $more);
            }

            foreach ($value as $styleName => $styleValue) {
                $styleObject = [
                    'title' => $styleName,
                    'style_category_id' => $styleCategory->id,
                    'style_category_type_id' => $styleCategoryType->id,
                    'content' => $hasColors ? $styleValue['css'] : $styleValue,
                ];

                if ($hasColors) {
                    $styleObject['color_id'] = $styleValue['color_id'];
                }

                if ($hasSpacings) {
                    $cssValue = $this->extractCssValue($styleValue);
                    $currentSpacing = null;
                    foreach ($allSpacings as $spacing) {
                        if (isset($spacing->rem) && $spacing->rem == $cssValue) {
                            $currentSpacing = $spacing;
                        }
                    }
                    if ($currentSpacing) {
                        $styleObject['spacing_id'] = $currentSpacing->id;
                    }
                }

                Style::firstOrCreate($styleObject);
            }
        }
    }

    public function extractCssValue($cssProperty)
    {
        $cssProperty = trim($cssProperty);
        $parts = explode(':', $cssProperty);
        if (count($parts) >= 2) {
            $valuePart = trim($parts[1]);
            $valuePart = rtrim($valuePart, ';');
            if (preg_match('/^[0-9\.]+/', $valuePart, $matches)) {
                return (float) $matches[0];
            }
        }
        return null;
    }

    public function appendColors($colors, $classPrefix, $cssPrefix, array $transformations = [], $cssPostfix = null)
    {
        $responseArray = [];
        foreach ($colors as $color) {
            $class = "{$classPrefix}-{$color->name}";
            $css = "{$cssPrefix}: {$color->hex};";
            if ($cssPostfix) {
                $css = $css . $cssPostfix;
            }
            $responseArray[$class] = ['css' => $css, 'color_id' => $color->id];

            if (count($transformations) > 0) {
                foreach ($transformations as $transformation => $cssRepresentative) {
                    $cssPrefixSplit = explode('-', $cssPrefix);
                    $class = "{$classPrefix}-{$transformation}-{$color->name}";
                    if (!is_array($cssRepresentative)) {
                        $cssPrefix = "{$cssPrefixSplit[0]}-{$cssRepresentative}-{$cssPrefixSplit[1]}";
                        $css = "{$cssPrefix}: {$color->hex};";
                        $responseArray[$class] = ['css' => $css, 'color_id' => $color->id];
                    } else {
                        $css = "";
                        foreach ($cssRepresentative as $cssRepresentativeItem) {
                            $cssPrefix = "{$cssPrefixSplit[0]}-{$cssRepresentativeItem}-{$cssPrefixSplit[1]}";
                            $css = $css . "{$cssPrefix}: {$color->hex};";
                        }
                        $responseArray[$class] = ['css' => $css, 'color_id' => $color->id];
                    }
                }
            }
        }
        return $responseArray;
    }
}
