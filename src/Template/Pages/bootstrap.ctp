<style>/*!
 * Bootstrap Docs (https://getbootstrap.com)
 * Copyright 2011-2016 The Bootstrap Authors
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the Creative Commons Attribution 3.0 Unported License. For
 * details, see https://creativecommons.org/licenses/by/3.0/.
 */
.bd-booticon {
  display: block;
  width: 9rem;
  height: 9rem;
  font-size: 6.5rem;
  line-height: 9rem;
  color: #fff;
  text-align: center;
  cursor: default;
  background-color: #563d7c;
  border-radius: 15%;
}

.bd-booticon.inverse {
  color: #563d7c;
  background-color: #fff;
}

.bd-booticon.outline {
  background-color: transparent;
  border: 1px solid #cdbfe3;
}

.bd-navbar {
  padding-right: 0;
  padding-left: 0;
}

.bd-navbar .navbar-nav .nav-link {
  color: #8e869d;
}

.bd-navbar .navbar-nav .nav-link.active, .bd-navbar .navbar-nav .nav-link:hover, .bd-navbar .navbar-nav .nav-link:focus {
  color: #373a3c;
  background-color: transparent;
}

.bd-navbar .navbar-nav .nav-link.active {
  font-weight: 500;
  color: #121314;
}

.bd-navbar .dropdown-menu {
  font-size: inherit;
}

@media (max-width: 767px) {
  .bd-navbar .nav-link {
    float: none;
  }
  .bd-navbar .nav-link + .nav-link {
    margin-left: 0;
  }
}

.bd-masthead {
  position: relative;
  padding: 3rem 15px 2rem;
  color: #cdbfe3;
  text-align: center;
  background-image: -webkit-linear-gradient(315deg, #271b38, #563d7c, #7952b3);
  background-image: -o-linear-gradient(315deg, #271b38, #563d7c, #7952b3);
  background-image: linear-gradient(135deg, #271b38, #563d7c, #7952b3);
}

.bd-masthead .bd-booticon {
  margin: 0 auto 2rem;
  color: #cdbfe3;
  border-color: #cdbfe3;
}

.bd-masthead h1 {
  font-weight: 300;
  line-height: 1;
}

.bd-masthead .lead {
  margin-right: auto;
  margin-bottom: 2rem;
  margin-left: auto;
  font-size: 1.25rem;
  color: #fff;
}

.bd-masthead .version {
  margin-top: -1rem;
  margin-bottom: 2rem;
}

.bd-masthead .btn {
  width: 100%;
  padding: 1rem 2rem;
  font-size: 1.25rem;
  font-weight: 500;
  color: #ffe484;
  border-color: #ffe484;
}

.bd-masthead .btn:hover {
  color: #2a2730;
  background-color: #ffe484;
  border-color: #ffe484;
}

.bd-masthead .carbonad {
  margin-bottom: -2rem !important;
}

@media (min-width: 576px) {
  .bd-masthead {
    padding-top: 8rem;
    padding-bottom: 2rem;
  }
  .bd-masthead .btn {
    width: auto;
  }
  .bd-masthead .carbonad {
    margin-bottom: 0 !important;
  }
}

@media (min-width: 768px) {
  .bd-masthead {
    padding-bottom: 4rem;
  }
  .bd-masthead .bd-header {
    margin-bottom: 4rem;
  }
  .bd-masthead h1 {
    font-size: 4rem;
  }
  .bd-masthead .lead {
    font-size: 1.5rem;
  }
  .bd-masthead .carbonad {
    margin-top: 3rem !important;
  }
}

@media (min-width: 992px) {
  .bd-masthead .lead {
    width: 85%;
    font-size: 2rem;
  }
}

.bd-featurette {
  padding-top: 3rem;
  padding-bottom: 3rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #555;
  text-align: center;
  background-color: #fff;
  border-top: 1px solid #eee;
}

.bd-featurette .highlight {
  text-align: left;
}

.bd-featurette .lead {
  margin-right: auto;
  margin-bottom: 2rem;
  margin-left: auto;
  font-size: 1rem;
  text-align: center;
}

@media (min-width: 576px) {
  .bd-featurette {
    text-align: left;
  }
}

@media (min-width: 768px) {
  .bd-featurette .col-sm-6:first-child {
    padding-right: 45px;
  }
  .bd-featurette .col-sm-6:last-child {
    padding-left: 45px;
  }
}

.bd-featurette-title {
  margin-bottom: .5rem;
  font-size: 2rem;
  font-weight: normal;
  color: #333;
  text-align: center;
}

.half-rule {
  width: 6rem;
  margin: 2.5rem auto;
}

@media (min-width: 576px) {
  .half-rule {
    margin-right: 0;
    margin-left: 0;
  }
}

.bd-featurette h4 {
  margin-top: 1rem;
  margin-bottom: .5rem;
  font-weight: normal;
  color: #333;
}

.bd-featurette-img {
  display: block;
  margin-bottom: 1.25rem;
  color: #333;
}

.bd-featurette-img:hover {
  color: #0275d8;
  text-decoration: none;
}

.bd-featurette-img img {
  display: block;
  margin-bottom: 1rem;
}

@media (min-width: 480px) {
  .bd-featurette .img-fluid {
    margin-top: 2rem;
  }
}

@media (min-width: 768px) {
  .bd-featurette {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }
  .bd-featurette-title {
    font-size: 2.5rem;
  }
  .bd-featurette-title + .lead {
    font-size: 1.5rem;
  }
  .bd-featurette .lead {
    max-width: 80%;
  }
  .bd-featurette .img-fluid {
    margin-top: 0;
  }
}

.bd-featured-sites {
  margin-right: -1px;
  margin-left: -1px;
}

.bd-featured-sites .col-xs-6 {
  padding: 1px;
}

.bd-featured-sites .img-fluid {
  margin-top: 0;
}

@media (min-width: 768px) {
  .bd-featured-sites .col-sm-3:first-child img {
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem;
  }
  .bd-featured-sites .col-sm-3:last-child img {
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem;
  }
}

#carbonads {
  display: block;
  padding: 15px 15px 15px 160px;
  margin: 50px -15px 0;
  overflow: hidden;
  font-size: 13px;
  line-height: 1.5;
  text-align: left;
  border: solid #866ab3;
  border-width: 1px 0 0;
}

#carbonads a {
  color: #fff;
  text-decoration: none;
}

@media (min-width: 576px) {
  #carbonads {
    max-width: 330px;
    margin: 50px auto 0;
    border-width: 1px;
    border-radius: 4px;
  }
}

@media (min-width: 992px) {
  #carbonads {
    position: absolute;
    top: 0;
    right: 15px;
    margin-top: 0;
  }
  .bd-masthead #carbonads {
    position: static;
  }
}

.carbon-img {
  float: left;
  margin-left: -145px;
}

.carbon-poweredby {
  display: block;
  color: #cdbfe3 !important;
}

.bd-content > table {
  display: block;
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  overflow-y: auto;
}

.bd-content > table > thead > tr > th,
.bd-content > table > thead > tr > td,
.bd-content > table > tbody > tr > th,
.bd-content > table > tbody > tr > td,
.bd-content > table > tfoot > tr > th,
.bd-content > table > tfoot > tr > td {
  padding: 0.75rem;
  vertical-align: top;
  border: 1px solid #eceeef;
}

.bd-content > table > thead > tr > th > p:last-child,
.bd-content > table > thead > tr > td > p:last-child,
.bd-content > table > tbody > tr > th > p:last-child,
.bd-content > table > tbody > tr > td > p:last-child,
.bd-content > table > tfoot > tr > th > p:last-child,
.bd-content > table > tfoot > tr > td > p:last-child {
  margin-bottom: 0;
}

.bd-content > table td:first-child > code {
  white-space: nowrap;
}

.bd-content > h2:not(:first-child) {
  margin-top: 3rem;
}

.bd-content > h3 {
  margin-top: 1.5rem;
}

.bd-content > ul li,
.bd-content > ol li {
  margin-bottom: .25rem;
}

@media (min-width: 576px) {
  .bd-title {
    font-size: 3rem;
  }
  .bd-title + p {
    font-size: 1.25rem;
    font-weight: 300;
  }
}

#markdown-toc > li:first-child {
  display: none;
}

#markdown-toc ul {
  padding-left: 2rem;
  margin-top: .25rem;
  margin-bottom: .25rem;
}

.bd-pageheader {
  padding: 2rem 15px;
  margin-bottom: 1.5rem;
  color: #cdbfe3;
  text-align: center;
  background-color: #563d7c;
}

.bd-pageheader .container {
  position: relative;
}

.bd-pageheader h1 {
  font-size: 3rem;
  font-weight: normal;
  color: #fff;
}

.bd-pageheader p {
  margin-bottom: 0;
  font-size: 1.25rem;
  font-weight: 300;
}

@media (min-width: 576px) {
  .bd-pageheader {
    padding-top: 4rem;
    padding-bottom: 4rem;
    margin-bottom: 3rem;
    text-align: left;
  }
  .bd-pageheader .carbonad {
    margin: 2rem 0 0 !important;
  }
}

@media (min-width: 768px) {
  .bd-pageheader h1 {
    font-size: 4rem;
  }
  .bd-pageheader p {
    font-size: 1.5rem;
  }
}

@media (min-width: 992px) {
  .bd-pageheader h1,
  .bd-pageheader p {
    margin-right: 380px;
  }
  .bd-pageheader .carbonad {
    position: absolute;
    top: 0;
    right: .75rem;
    margin: 0 !important;
  }
}

#skippy {
  display: block;
  padding: 1em;
  color: #fff;
  background-color: #563d7c;
  outline: 0;
}

#skippy .skiplink-text {
  padding: .5em;
  outline: 1px dotted;
}

@media (min-width: 768px) {
  .bd-sidebar {
    padding-left: 1rem;
  }
}

.bd-search {
  position: relative;
  margin-bottom: 1.5rem;
}

.bd-search .form-control {
  height: 2.45rem;
  padding-top: .4rem;
  padding-bottom: .4rem;
  background-color: #fafafa;
}

.bd-search .form-control:focus {
  background-color: #fff;
}

.bd-search-results {
  right: 0;
  display: block;
  padding: 0;
  overflow: hidden;
  font-size: .9rem;
}

.bd-search-results:empty {
  display: none;
}

.bd-search-results .dropdown-item {
  padding-right: .75rem;
  padding-left: .75rem;
}

.bd-search-results .dropdown-item:first-child {
  margin-top: .25rem;
}

.bd-search-results .dropdown-item:last-child {
  margin-bottom: .25rem;
}

.bd-search-results .no-results {
  padding: .75rem 1rem;
  color: #7a7a7a;
  text-align: center;
  white-space: normal;
}

.bd-sidenav {
  display: none;
}

.bd-toc-link {
  display: block;
  padding: .25rem .75rem;
  color: #55595c;
}

.bd-toc-link:hover,
.bd-toc-link:focus {
  color: #0275d8;
  text-decoration: none;
}

.active > .bd-toc-link {
  font-weight: 500;
  color: #373a3c;
}

.active > .bd-sidenav {
  display: block;
}

.bd-toc-item.active {
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.bd-toc-item:first-child {
  margin-top: 0;
}

.bd-toc-item:last-child {
  margin-bottom: 2rem;
}

.bd-sidebar .nav > li > a {
  display: block;
  padding: .25rem .75rem;
  font-size: 90%;
  color: #99979c;
}

.bd-sidebar .nav > li > a:hover,
.bd-sidebar .nav > li > a:focus {
  color: #0275d8;
  text-decoration: none;
  background-color: transparent;
}

.bd-sidebar .nav > .active > a,
.bd-sidebar .nav > .active:hover > a,
.bd-sidebar .nav > .active:focus > a {
  font-weight: 500;
  color: #373a3c;
  background-color: transparent;
}

.bd-footer {
  padding: 4rem 0;
  margin-top: 4rem;
  font-size: 85%;
  text-align: center;
  background-color: #f7f7f7;
}

.bd-footer a {
  font-weight: 500;
  color: #55595c;
}

.bd-footer a:hover {
  color: #0275d8;
}

.bd-footer p {
  margin-bottom: 0;
}

@media (min-width: 576px) {
  .bd-footer {
    text-align: left;
  }
}

.bd-footer-links {
  padding-left: 0;
  margin-bottom: 1rem;
}

.bd-footer-links li {
  display: inline-block;
}

.bd-footer-links li + li {
  margin-left: 1rem;
}

.bd-example-row .row + .row {
  margin-top: 1rem;
}

.bd-example-row .row > .col,
.bd-example-row .row > [class^="col-"] {
  padding-top: .75rem;
  padding-bottom: .75rem;
  background-color: rgba(86, 61, 124, 0.15);
  border: 1px solid rgba(86, 61, 124, 0.2);
}

.bd-example-row .flex-items-xs-top,
.bd-example-row .flex-items-xs-middle,
.bd-example-row .flex-items-xs-bottom {
  min-height: 6rem;
  background-color: rgba(255, 0, 0, 0.1);
}

.bd-example-row-flex-cols .row {
  min-height: 10rem;
  background-color: rgba(255, 0, 0, 0.1);
}

.bd-example-container {
  min-width: 16rem;
  max-width: 25rem;
  margin-right: auto;
  margin-left: auto;
}

.bd-example-container-header {
  height: 3rem;
  margin-bottom: .5rem;
  background-color: #daeeff;
  border-radius: .25rem;
}

.bd-example-container-sidebar {
  float: right;
  width: 4rem;
  height: 8rem;
  background-color: #fae3c4;
  border-radius: .25rem;
}

.bd-example-container-body {
  height: 8rem;
  margin-right: 4.5rem;
  background-color: #957bbe;
  border-radius: .25rem;
}

.bd-example-container-fluid {
  max-width: none;
}

.bd-example {
  position: relative;
  padding: 1rem;
  margin: 1rem -1rem;
  border: solid #f7f7f9;
  border-width: .2rem 0 0;
}

.bd-example::after {
  content: "";
  display: table;
  clear: both;
}

@media (min-width: 576px) {
  .bd-example {
    padding: 1.5rem;
    margin-right: 0;
    margin-bottom: 0;
    margin-left: 0;
    border-width: .2rem;
  }
}

.bd-example + .highlight,
.bd-example + .clipboard + .highlight {
  margin-top: 0;
}

.bd-example + p {
  margin-top: 2rem;
}

.bd-example .container {
  width: auto;
}

.bd-example > .form-control + .form-control {
  margin-top: .5rem;
}

.bd-example > .card {
  max-width: 20rem;
}

.bd-example > .nav + .nav,
.bd-example > .alert + .alert,
.bd-example > .navbar + .navbar,
.bd-example > .progress + .progress,
.bd-example > .progress + .btn {
  margin-top: 1rem;
}

.bd-example > .dropdown-menu:first-child {
  position: static;
  display: block;
}

.bd-example > .form-group:last-child {
  margin-bottom: 0;
}

.bd-example > .close {
  float: none;
}

.bd-example-type .table .type-info {
  color: #999;
  vertical-align: middle;
}

.bd-example-type .table td {
  padding: 1rem 0;
  border-color: #eee;
}

.bd-example-type .table tr:first-child td {
  border-top: 0;
}

.bd-example-type h1,
.bd-example-type h2,
.bd-example-type h3,
.bd-example-type h4,
.bd-example-type h5,
.bd-example-type h6 {
  margin: 0;
}

.bd-example-bg-classes p {
  padding: 1rem;
}

.bd-example > img + img {
  margin-left: .5rem;
}

.bd-example > .btn-group {
  margin-top: .25rem;
  margin-bottom: .25rem;
}

.bd-example > .btn-toolbar + .btn-toolbar {
  margin-top: .5rem;
}

.bd-example-control-sizing select,
.bd-example-control-sizing input[type="text"] + input[type="text"] {
  margin-top: .5rem;
}

.bd-example-form .input-group {
  margin-bottom: .5rem;
}

.bd-example > textarea.form-control {
  resize: vertical;
}

.bd-example > .list-group {
  max-width: 400px;
}

.bd-example .navbar-fixed-top {
  position: static;
  margin: -1rem -1rem 1rem;
}

.bd-example .navbar-fixed-bottom {
  position: static;
  margin: 1rem -1rem -1rem;
}

@media (min-width: 576px) {
  .bd-example .navbar-fixed-top {
    margin: -1.5rem -1.5rem 1rem;
  }
  .bd-example .navbar-fixed-bottom {
    margin: 1rem -1.5rem -1.5rem;
  }
}

.bd-example .pagination {
  margin-top: .5rem;
  margin-bottom: .5rem;
}

.bd-example-modal {
  background-color: #f5f5f5;
}

.bd-example-modal .modal {
  position: relative;
  top: auto;
  right: auto;
  bottom: auto;
  left: auto;
  z-index: 1;
  display: block;
}

.bd-example-modal .modal-dialog {
  left: auto;
  margin-right: auto;
  margin-left: auto;
}

.bd-example > .dropdown > .dropdown-toggle {
  float: left;
}

.bd-example > .dropdown > .dropdown-menu {
  position: static;
  display: block;
  margin-bottom: .25rem;
  clear: left;
}

.bd-example-tabs .nav-tabs {
  margin-bottom: 1rem;
}

.bd-example-tooltips {
  text-align: center;
}

.bd-example-tooltips > .btn {
  margin-top: .25rem;
  margin-bottom: .25rem;
}

.bd-example-popover-static {
  padding-bottom: 1.5rem;
  background-color: #f9f9f9;
}

.bd-example-popover-static .popover {
  position: relative;
  display: block;
  float: left;
  width: 260px;
  margin: 1.25rem;
}

.tooltip-demo a {
  white-space: nowrap;
}

.bd-example-tooltip-static .tooltip {
  position: relative;
  display: inline-block;
  margin: 10px 20px;
  opacity: 1;
}

.scrollspy-example {
  position: relative;
  height: 200px;
  margin-top: .5rem;
  overflow: auto;
}

.bd-example > .bg-primary:not(.navbar),
.bd-example > .bg-success:not(.navbar),
.bd-example > .bg-info:not(.navbar),
.bd-example > .bg-warning:not(.navbar),
.bd-example > .bg-danger:not(.navbar),
.bd-example > .bg-inverse:not(.navbar) {
  padding: .5rem;
  margin-top: .5rem;
  margin-bottom: .5rem;
}

.highlight {
  padding: 1rem;
  margin: 1rem -15px;
  background-color: #f7f7f9;
}

@media (min-width: 576px) {
  .highlight {
    padding: 1.5rem;
    margin-right: 0;
    margin-left: 0;
  }
}

.highlight pre {
  padding: 0;
  margin-top: 0;
  margin-bottom: 0;
  background-color: transparent;
  border: 0;
}

.highlight pre code {
  font-size: inherit;
  color: #373a3c;
}

.table-responsive .highlight pre {
  white-space: normal;
}

.bd-table th small,
.responsive-utilities th small {
  display: block;
  font-weight: normal;
  color: #999;
}

.responsive-utilities tbody th {
  font-weight: normal;
}

.responsive-utilities td {
  text-align: center;
}

.responsive-utilities .is-visible {
  color: #468847;
  background-color: #dff0d8 !important;
}

.responsive-utilities .is-hidden {
  color: #ccc;
  background-color: #f9f9f9 !important;
}

.responsive-utilities-test {
  margin-top: .25rem;
}

.responsive-utilities-test .col-xs-6 {
  margin-top: .5rem;
  margin-bottom: .5rem;
}

.responsive-utilities-test span {
  display: block;
  padding: 1rem .5rem;
  font-size: 1rem;
  font-weight: bold;
  line-height: 1.1;
  text-align: center;
  border-radius: .25rem;
}

.visible-on .col-xs-6 > .not-visible,
.hidden-on .col-xs-6 > .not-visible {
  color: #999;
  border: 1px solid #ddd;
}

.visible-on .col-xs-6 .visible,
.hidden-on .col-xs-6 .visible {
  color: #468847;
  background-color: #dff0d8;
  border: 1px solid #d6e9c6;
}

@media (max-width: 575px) {
  .hidden-xs-only {
    display: none !important;
  }
}

@media (min-width: 576px) and (max-width: 767px) {
  .hidden-sm-only {
    display: none !important;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .hidden-md-only {
    display: none !important;
  }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-lg-only {
    display: none !important;
  }
}

@media (min-width: 1200px) {
  .hidden-xl-only {
    display: none !important;
  }
}

.btn-bs {
  font-weight: 500;
  color: #7952b3;
  border-color: #7952b3;
}

.btn-bs:hover, .btn-bs:focus, .btn-bs:active {
  color: #fff;
  background-color: #7952b3;
  border-color: #7952b3;
}

.bd-callout {
  padding: 1.25rem;
  margin-top: 1.25rem;
  margin-bottom: 1.25rem;
  border: 1px solid #eee;
  border-left-width: .25rem;
  border-radius: .25rem;
}

.bd-callout h4 {
  margin-top: 0;
  margin-bottom: .25rem;
}

.bd-callout p:last-child {
  margin-bottom: 0;
}

.bd-callout code {
  border-radius: .25rem;
}

.bd-callout + .bd-callout {
  margin-top: -.25rem;
}

.bd-callout-info {
  border-left-color: #5bc0de;
}

.bd-callout-info h4 {
  color: #5bc0de;
}

.bd-callout-warning {
  border-left-color: #f0ad4e;
}

.bd-callout-warning h4 {
  color: #f0ad4e;
}

.bd-callout-danger {
  border-left-color: #d9534f;
}

.bd-callout-danger h4 {
  color: #d9534f;
}

.bd-examples .img-thumbnail {
  margin-bottom: .75rem;
}

.bd-examples h4 {
  margin-bottom: .25rem;
}

.bd-examples p {
  margin-bottom: 1.25rem;
}

@media (max-width: 480px) {
  .bd-examples {
    margin-right: -.75rem;
    margin-left: -.75rem;
  }
  .bd-examples > [class^="col-"] {
    padding-right: .75rem;
    padding-left: .75rem;
  }
}

.bd-team {
  margin-bottom: 1.5rem;
}

.bd-team .team-member {
  line-height: 2rem;
  color: #555;
}

.bd-team .team-member:hover {
  color: #333;
  text-decoration: none;
}

.bd-team .github-btn {
  float: right;
  width: 180px;
  height: 1.25rem;
  margin-top: .25rem;
  border: 0;
}

.bd-team img {
  float: left;
  width: 2rem;
  margin-right: .5rem;
  border-radius: .25rem;
}

.bd-browser-bugs td p {
  margin-bottom: 0;
}

.bd-browser-bugs th:first-child {
  width: 18%;
}

.bd-brand-logos {
  display: table;
  width: 100%;
  margin-bottom: 1rem;
  overflow: hidden;
  color: #563d7c;
  background-color: #f9f9f9;
  border-radius: .25rem;
}

.bd-brand-item {
  padding: 4rem 0;
  text-align: center;
}

.bd-brand-item + .bd-brand-item {
  border-top: 1px solid #fff;
}

.bd-brand-logos .inverse {
  color: #fff;
  background-color: #563d7c;
}

.bd-brand-item h1,
.bd-brand-item h3 {
  margin-top: 0;
  margin-bottom: 0;
}

.bd-brand-item .bd-booticon {
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 768px) {
  .bd-brand-item {
    display: table-cell;
    width: 1%;
  }
  .bd-brand-item + .bd-brand-item {
    border-top: 0;
    border-left: 1px solid #fff;
  }
  .bd-brand-item h1 {
    font-size: 4rem;
  }
}

.color-swatches {
  margin: 0 -5px;
  overflow: hidden;
}

.color-swatch {
  float: left;
  width: 4rem;
  height: 4rem;
  margin-right: .25rem;
  margin-left: .25rem;
  border-radius: .25rem;
}

@media (min-width: 768px) {
  .color-swatch {
    width: 6rem;
    height: 6rem;
  }
}

.color-swatches .bd-purple {
  background-color: #563d7c;
}

.color-swatches .bd-purple-light {
  background-color: #cdbfe3;
}

.color-swatches .bd-purple-lighter {
  background-color: #e5e1ea;
}

.color-swatches .bd-gray {
  background-color: #f9f9f9;
}

.bd-clipboard {
  position: relative;
  display: none;
  float: right;
}

.bd-clipboard + .highlight {
  margin-top: 0;
}

.btn-clipboard {
  position: absolute;
  top: .5rem;
  right: .5rem;
  z-index: 10;
  display: block;
  padding: .25rem .5rem;
  font-size: 75%;
  color: #818a91;
  cursor: pointer;
  background-color: transparent;
  border-radius: .25rem;
}

.btn-clipboard:hover {
  color: #fff;
  background-color: #027de7;
}

@media (min-width: 768px) {
  .bd-clipboard {
    display: block;
  }
}

.hll {
  background-color: #ffc;
}

.c {
  color: #999;
}

.k {
  color: #069;
}

.o {
  color: #555;
}

.cm {
  color: #999;
}

.cp {
  color: #099;
}

.c1 {
  color: #999;
}

.cs {
  color: #999;
}

.gd {
  background-color: #fcc;
  border: 1px solid #c00;
}

.ge {
  font-style: italic;
}

.gr {
  color: #f00;
}

.gh {
  color: #030;
}

.gi {
  background-color: #cfc;
  border: 1px solid #0c0;
}

.go {
  color: #aaa;
}

.gp {
  color: #009;
}

.gu {
  color: #030;
}

.gt {
  color: #9c6;
}

.kc {
  color: #069;
}

.kd {
  color: #069;
}

.kn {
  color: #069;
}

.kp {
  color: #069;
}

.kr {
  color: #069;
}

.kt {
  color: #078;
}

.m {
  color: #f60;
}

.s {
  color: #d44950;
}

.na {
  color: #4f9fcf;
}

.nb {
  color: #366;
}

.nc {
  color: #0a8;
}

.no {
  color: #360;
}

.nd {
  color: #99f;
}

.ni {
  color: #999;
}

.ne {
  color: #c00;
}

.nf {
  color: #c0f;
}

.nl {
  color: #99f;
}

.nn {
  color: #0cf;
}

.nt {
  color: #2f6f9f;
}

.nv {
  color: #033;
}

.ow {
  color: #000;
}

.w {
  color: #bbb;
}

.mf {
  color: #f60;
}

.mh {
  color: #f60;
}

.mi {
  color: #f60;
}

.mo {
  color: #f60;
}

.sb {
  color: #c30;
}

.sc {
  color: #c30;
}

.sd {
  font-style: italic;
  color: #c30;
}

.s2 {
  color: #c30;
}

.se {
  color: #c30;
}

.sh {
  color: #c30;
}

.si {
  color: #a00;
}

.sx {
  color: #c30;
}

.sr {
  color: #3aa;
}

.s1 {
  color: #c30;
}

.ss {
  color: #fc3;
}

.bp {
  color: #366;
}

.vc {
  color: #033;
}

.vg {
  color: #033;
}

.vi {
  color: #033;
}

.il {
  color: #f60;
}

.css .o,
.css .o + .nt,
.css .nt + .nt {
  color: #999;
}

.language-bash::before {
  color: #009;
  content: "$ ";
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.language-powershell::before {
  color: #009;
  content: "PM> ";
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.anchorjs-link {
  color: inherit;
}

@media (max-width: 480px) {
  .anchorjs-link {
    display: none;
  }
}

*:hover > .anchorjs-link {
  opacity: .75;
  -webkit-transition: color .16s linear;
  -o-transition: color .16s linear;
  transition: color .16s linear;
}

*:hover > .anchorjs-link:hover,
.anchorjs-link:focus {
  text-decoration: none;
  opacity: 1;
}</style><div class="bd-pageheader container-full"><div class="container"><h1>Bootstrap</h1><p class="lead">Over a dozen reusable components built to provide buttons, dropdowns, input groups, navigation, alerts, and much more.</p></div></div><div class=bd-content>
          <h1 class="bd-title" id="content">Overview</h1>
          <p>Bootstrap includes several components and options for laying out your project, including wrapping containers, a powerful grid system, a flexible media object, and responsive utility classes.</p>

<h2 id="containers">Containers</h2>

<p>Containers are the most basic layout element in Bootstrap and are <strong>required when using our grid system</strong>. Choose from a responsive, fixed-width container (meaning its <code class="highlighter-rouge">max-width</code> changes at each breakpoint) or fluid-width (meaning itâs <code class="highlighter-rouge">100%</code> wide all the time).</p>

<p>While containers <em>can</em> be nested, most layouts do not require a nested container.</p>

<div class="bd-example">
  <div class="bd-example-container">
    <div class="bd-example-container-header"></div>
    <div class="bd-example-container-sidebar"></div>
    <div class="bd-example-container-body"></div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Content here --&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure><p>Use <code class="highlighter-rouge">.container-fluid</code> for a full width container, spanning the entire width of the viewport.</p>

<div class="bd-example">
  <div class="bd-example-container bd-example-container-fluid">
    <div class="bd-example-container-header"></div>
    <div class="bd-example-container-sidebar"></div>
    <div class="bd-example-container-body"></div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></figure><h2 id="responsive-breakpoints">Responsive breakpoints</h2>

<p>Since Bootstrap is developed to be mobile first, we use a handful of <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Media_queries">media queries</a> to create sensible breakpoints for our layouts and interfaces. These breakpoints are mostly based on minimum viewport widths and allow us to scale up elements as the viewport changes.</p>

<p>Bootstrap primarily uses the following media query rangesâor breakpointsâin our source Sass files for our layout, grid system, and components.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Extra small devices (portrait phones, less than 544px)
// No media query since this is the default in Bootstrap
</span>
<span class="c1">// Small devices (landscape phones, 544px and up)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">544px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Medium devices (tablets, 768px and up)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">768px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Large devices (desktops, 992px and up)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">992px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Extra large devices (large desktops, 1200px and up)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">1200px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure><p>Since we write our source CSS in Sass, all our media queries are available via Sass mixins:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">xs</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Example usage:
</span><span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
  <span class="nc">.some-class</span> <span class="p">{</span>
    <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure><p>We occasionally use media queries that go in the other direction (the given screen size <em>or smaller</em>):</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Extra small devices (portrait phones, less than 544px)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">543px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Small devices (landscape phones, less than 768px)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">767px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Medium devices (tablets, less than 992px)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">991px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Large devices (desktops, less than 1200px)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">1199px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Extra large devices (large desktops)
</span><span class="o">//</span> <span class="nt">No</span> <span class="nt">media</span> <span class="nt">query</span> <span class="nt">since</span> <span class="nt">the</span> <span class="nt">extra-large</span> <span class="nt">breakpoint</span> <span class="nt">has</span> <span class="nt">no</span> <span class="nt">upper</span> <span class="nt">bound</span> <span class="nt">on</span> <span class="nt">its</span> <span class="nt">width</span></code></pre></figure><p>Once again, these media queries are also available via Sass mixins:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">xs</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure><p>We also have media between the breakpointâs minimum and maximum widths for only the given screen size:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Extra small devices (portrait phones, less than 544px)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">543px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Small devices (landscape phones, 544px and up)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">544px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">767px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Medium devices (tablets, 768px and up)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">768px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">991px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Large devices (desktops, 992px and up)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">992px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">1199px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Extra large devices (large desktops, 1200px and up)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">1200px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure><p>These media queries are also available via Sass mixins:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">xs</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure><p>And finally media that spans multiple breakpoint widths:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Example
// Medium devices (tablets, 768px and up) and  Large devices (desktops, 992px and up)
</span><span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">768px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">1199px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure><p>The Sass mixin for the above example look like that shown beneath:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@include</span> <span class="nd">media-breakpoint-between</span><span class="p">(</span><span class="n">md</span><span class="o">,</span> <span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure>
</div><div class=bd-content>
          <h1 class="bd-title" id="content">Media object</h1>
          <p>The <a href="http://www.stubbornella.org/content/2010/06/25/the-media-object-saves-hundreds-of-lines-of-code/">media object</a> is an abstract element used as the basis for building more complex and repetitive components (like blog comments, Tweets, etc). Included is support for left and right aligned content, content alignment options, nesting, and more.</p>

<div class="bd-callout bd-callout-info">
<p><strong>Heads up!</strong> When <a href="/getting-started/flexbox/">flexbox mode</a> is enabled, the media object will use <code class="highlighter-rouge">flex</code> styles wherever possible.</p>
</div>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#default-media" id="markdown-toc-default-media">Default media</a></li>
  <li><a href="#nesting" id="markdown-toc-nesting">Nesting</a></li>
  <li><a href="#alignment" id="markdown-toc-alignment">Alignment</a></li>
  <li><a href="#media-list" id="markdown-toc-media-list">Media list</a></li>
</ul>
<h2 id="default-media">Default media</h2>

<p>The default media allow to float a media object (images, video, audio) to the left or right of a content block.</p>

<div class="bd-example" data-example-id="">
<div class="media">
  <a class="media-left" href="#">
    <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image"></a>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"media-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Generic placeholder image"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="nesting">Nesting</h2>

<p>Media components can also be nested.</p>

<div class="bd-example" data-example-id="">
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image"></a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    <div class="media mt-2">
      <a class="media-left" href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image"></a>
      <div class="media-body">
        <h4 class="media-heading">Nested media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Generic placeholder image"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media mt-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"media-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Generic placeholder image"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Nested media heading<span class="nt">&lt;/h4&gt;</span>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="alignment">Alignment</h2>

<p>The images or other media can be aligned top, middle, or bottom. The default is top aligned.</p>

<div class="bd-example" data-example-id="">
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image"></a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Top aligned media</h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Generic placeholder image"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Top aligned media<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p&gt;</span>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p&gt;</span>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image"></a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Middle aligned media</h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left media-middle"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Generic placeholder image"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Middle aligned media<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p&gt;</span>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p&gt;</span>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="media">
  <div class="media-left media-bottom">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image"></a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Bottom aligned media</h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left media-bottom"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Generic placeholder image"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Bottom aligned media<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p&gt;</span>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p&gt;</span>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="media-list">Media list</h2>

<p>With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists).</p>

<div class="bd-example" data-example-id="">
<ul class="media-list">
<li class="media">
    <div class="media-left">
      <a href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image"></a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">Media heading</h4>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
      <!-- Nested media object -->
      <div class="media mt-2">
        <a class="media-left" href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image"></a>
        <div class="media-body">
          <h4 class="media-heading">Nested media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
          <!-- Nested media object -->
          <div class="media mt-2">
            <div class="media-left">
              <a href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image"></a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Nested media heading</h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            </div>
          </div>
        </div>
      </div>
      <!-- Nested media object -->
      <div class="media mt-2">
        <div class="media-left">
          <a href="#">
            <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">Nested media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
        </div>
      </div>
    </div>
  </li>
  <li class="media mt-2">
    <div class="media-body">
      <h4 class="media-heading">Media heading</h4>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
    </div>
    <div class="media-right">
      <a href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image"></a>
    </div>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"media-list"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Generic placeholder image"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;p&gt;</span>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.<span class="nt">&lt;/p&gt;</span>
      <span class="c">&lt;!-- Nested media object --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media mt-2"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"media-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Generic placeholder image"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Nested media heading<span class="nt">&lt;/h4&gt;</span>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
          <span class="c">&lt;!-- Nested media object --&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media mt-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Generic placeholder image"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Nested media heading<span class="nt">&lt;/h4&gt;</span>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="c">&lt;!-- Nested media object --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media mt-2"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Generic placeholder image"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Nested media heading<span class="nt">&lt;/h4&gt;</span>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"media mt-2"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-right"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Generic placeholder image"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>


        </div><div class=bd-content>
          <h1 class="bd-title" id="content">Typography</h1>
          <p>Bootstrap includes simple and easily customized typography for headings, body text, lists, and more. For even more control, check out the <a href="/utilities/">textual utility classes</a>.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#global-settings" id="markdown-toc-global-settings">Global settings</a></li>
  <li>
<a href="#headings" id="markdown-toc-headings">Headings</a>    <ul>
<li><a href="#customizing-headings" id="markdown-toc-customizing-headings">Customizing headings</a></li>
    </ul>
</li>
  <li><a href="#display-headings" id="markdown-toc-display-headings">Display headings</a></li>
  <li><a href="#lead" id="markdown-toc-lead">Lead</a></li>
  <li><a href="#inline-text-elements" id="markdown-toc-inline-text-elements">Inline text elements</a></li>
  <li><a href="#text-utilities" id="markdown-toc-text-utilities">Text utilities</a></li>
  <li><a href="#abbreviations" id="markdown-toc-abbreviations">Abbreviations</a></li>
  <li>
<a href="#blockquotes" id="markdown-toc-blockquotes">Blockquotes</a>    <ul>
<li><a href="#naming-a-source" id="markdown-toc-naming-a-source">Naming a source</a></li>
      <li><a href="#reverse-layout" id="markdown-toc-reverse-layout">Reverse layout</a></li>
    </ul>
</li>
  <li>
<a href="#lists" id="markdown-toc-lists">Lists</a>    <ul>
<li><a href="#unstyled" id="markdown-toc-unstyled">Unstyled</a></li>
      <li><a href="#inline" id="markdown-toc-inline">Inline</a></li>
      <li><a href="#description-list-alignment" id="markdown-toc-description-list-alignment">Description list alignment</a></li>
    </ul>
</li>
  <li><a href="#responsive-typography" id="markdown-toc-responsive-typography">Responsive typography</a></li>
</ul>
<h2 id="global-settings">Global settings</h2>

<p>Bootstrap sets basic global display, typography, and link styles. Specifically, we:</p>

<ul>
<li>Use a <a href="/content/reboot/#native-font-stack">native font stack</a> that selects the best <code class="highlighter-rouge">font-family</code> for each OS and device.</li>
  <li>Use the <code class="highlighter-rouge">$font-family-base</code>, <code class="highlighter-rouge">$font-size-base</code>, and <code class="highlighter-rouge">$line-height-base</code> attributes as our typographic base applied to the <code class="highlighter-rouge">&lt;body&gt;</code>.</li>
  <li>Set the global link color via <code class="highlighter-rouge">$link-color</code> and apply link underlines only on <code class="highlighter-rouge">:hover</code>.</li>
  <li>Use <code class="highlighter-rouge">$body-bg</code> to set a <code class="highlighter-rouge">background-color</code> on the <code class="highlighter-rouge">&lt;body&gt;</code> (<code class="highlighter-rouge">#fff</code> by default).</li>
</ul>
<p>These styles can be found within <code class="highlighter-rouge">_reboot.scss</code>, and the global variables are defined in <code class="highlighter-rouge">_variables.scss</code>.</p>

<h2 id="headings">Headings</h2>

<p>All HTML headings, <code class="highlighter-rouge">&lt;h1&gt;</code> through <code class="highlighter-rouge">&lt;h6&gt;</code>, are available.</p>

<div class="bd-example bd-example-type">
  <table class="table"><tbody>
<tr>
<td><h1>h1. Bootstrap heading</h1></td>
        <td class="type-info">Semibold 2.5rem (40px)</td>
      </tr>
<tr>
<td><h2>h2. Bootstrap heading</h2></td>
        <td class="type-info">Semibold 2rem (32px)</td>
      </tr>
<tr>
<td><h3>h3. Bootstrap heading</h3></td>
        <td class="type-info">Semibold 1.75rem (28px)</td>
      </tr>
<tr>
<td><h4>h4. Bootstrap heading</h4></td>
        <td class="type-info">Semibold 1.5rem (24px)</td>
      </tr>
<tr>
<td><h5>h5. Bootstrap heading</h5></td>
        <td class="type-info">Semibold 1.25rem (20px)</td>
      </tr>
<tr>
<td><h6>h6. Bootstrap heading</h6></td>
        <td class="type-info">Semibold 1rem (16px)</td>
      </tr>
</tbody></table>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/h6&gt;</span></code></pre></figure><p><code class="highlighter-rouge">.h1</code> through <code class="highlighter-rouge">.h6</code> classes are also available, for when you want to match the font styling of a heading but cannot use the associated HTML element.</p>

<div class="bd-example" data-example-id="">
<p class="h1">h1. Bootstrap heading</p>
<p class="h2">h2. Bootstrap heading</p>
<p class="h3">h3. Bootstrap heading</p>
<p class="h4">h4. Bootstrap heading</p>
<p class="h5">h5. Bootstrap heading</p>
<p class="h6">h6. Bootstrap heading</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h1"</span><span class="nt">&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h2"</span><span class="nt">&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h3"</span><span class="nt">&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h4"</span><span class="nt">&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h5"</span><span class="nt">&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h6"</span><span class="nt">&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/p&gt;</span></code></pre></div>

<h3 id="customizing-headings">Customizing headings</h3>

<p>Use the included utility classes to recreate the small secondary heading text from Bootstrap 3.</p>

<div class="bd-example" data-example-id="">
<h3>
  Fancy display heading
  <small class="text-muted">With faded secondary text</small>
</h3>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h3&gt;</span>
  Fancy display heading
  <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>With faded secondary text<span class="nt">&lt;/small&gt;</span>
<span class="nt">&lt;/h3&gt;</span></code></pre></div>

<h2 id="display-headings">Display headings</h2>

<p>Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a <strong>display heading</strong>âa larger, slightly more opinionated heading style.</p>

<div class="bd-example bd-example-type">
  <table class="table"><tbody>
<tr>
<td><h1 class="display-1">Display 1</h1></td>
      </tr>
<tr>
<td><h1 class="display-2">Display 2</h1></td>
      </tr>
<tr>
<td><h1 class="display-3">Display 3</h1></td>
      </tr>
<tr>
<td><h1 class="display-4">Display 4</h1></td>
      </tr>
</tbody></table>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-1"</span><span class="nt">&gt;</span>Display 1<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-2"</span><span class="nt">&gt;</span>Display 2<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-3"</span><span class="nt">&gt;</span>Display 3<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-4"</span><span class="nt">&gt;</span>Display 4<span class="nt">&lt;/h1&gt;</span></code></pre></figure><h2 id="lead">Lead</h2>

<p>Make a paragraph stand out by adding <code class="highlighter-rouge">.lead</code>.</p>

<div class="bd-example" data-example-id="">
<p class="lead">
  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>
  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
<span class="nt">&lt;/p&gt;</span></code></pre></div>

<h2 id="inline-text-elements">Inline text elements</h2>

<p>Styling for common inline HTML5 elements.</p>

<div class="bd-example" data-example-id="">
<p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;</span>You can use the mark tag to <span class="nt">&lt;mark&gt;</span>highlight<span class="nt">&lt;/mark&gt;</span> text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;del&gt;</span>This line of text is meant to be treated as deleted text.<span class="nt">&lt;/del&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;s&gt;</span>This line of text is meant to be treated as no longer accurate.<span class="nt">&lt;/s&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;ins&gt;</span>This line of text is meant to be treated as an addition to the document.<span class="nt">&lt;/ins&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;u&gt;</span>This line of text will render as underlined<span class="nt">&lt;/u&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;strong&gt;</span>This line rendered as bold text.<span class="nt">&lt;/strong&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;em&gt;</span>This line rendered as italicized text.<span class="nt">&lt;/em&gt;&lt;/p&gt;</span></code></pre></div>

<p><code class="highlighter-rouge">.mark</code> and <code class="highlighter-rouge">.small</code> classes are also available to apply the same styles as <code class="highlighter-rouge">&lt;mark&gt;</code> and <code class="highlighter-rouge">&lt;small&gt;</code> while avoiding any unwanted semantic implications that the tags would bring.</p>

<p>While not shown above, feel free to use <code class="highlighter-rouge">&lt;b&gt;</code> and <code class="highlighter-rouge">&lt;i&gt;</code> in HTML5. <code class="highlighter-rouge">&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code class="highlighter-rouge">&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>

<h2 id="text-utilities">Text utilities</h2>

<p>Change text alignment, transform, style, weight, and color with our <a href="/utilities/typography/#text-alignment">text utilities</a>.</p>

<h2 id="abbreviations">Abbreviations</h2>

<p>Stylized implementation of HTMLâs <code class="highlighter-rouge">&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code class="highlighter-rouge">title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover and to users of assistive technologies.</p>

<p>Add <code class="highlighter-rouge">.initialism</code> to an abbreviation for a slightly smaller font-size.</p>

<div class="bd-example" data-example-id="">
<p><abbr title="attribute">attr</abbr></p>
<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;&lt;abbr</span> <span class="na">title=</span><span class="s">"attribute"</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;abbr</span> <span class="na">title=</span><span class="s">"HyperText Markup Language"</span> <span class="na">class=</span><span class="s">"initialism"</span><span class="nt">&gt;</span>HTML<span class="nt">&lt;/abbr&gt;&lt;/p&gt;</span></code></pre></div>

<h2 id="blockquotes">Blockquotes</h2>

<p>For quoting blocks of content from another source within your document. Wrap <code class="highlighter-rouge">&lt;blockquote class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote.</p>

<div class="bd-example" data-example-id="">
<blockquote class="blockquote">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

<h3 id="naming-a-source">Naming a source</h3>

<p>Add a <code class="highlighter-rouge">&lt;footer class="blockquote-footer"&gt;</code> for identifying the source. Wrap the name of the source work in <code class="highlighter-rouge">&lt;cite&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<blockquote class="blockquote">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"blockquote-footer"</span><span class="nt">&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

<h3 id="reverse-layout">Reverse layout</h3>

<p>Add <code class="highlighter-rouge">.blockquote-reverse</code> for a blockquote with right-aligned content.</p>

<div class="bd-example" data-example-id="">
<blockquote class="blockquote blockquote-reverse">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote blockquote-reverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"blockquote-footer"</span><span class="nt">&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

<h2 id="lists">Lists</h2>

<h3 id="unstyled">Unstyled</h3>

<p>Remove the default <code class="highlighter-rouge">list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>

<div class="bd-example" data-example-id="">
<ul class="list-unstyled">
<li>Lorem ipsum dolor sit amet</li>
  <li>Consectetur adipiscing elit</li>
  <li>Integer molestie lorem at massa</li>
  <li>Facilisis in pretium nisl aliquet</li>
  <li>Nulla volutpat aliquam velit
    <ul>
<li>Phasellus iaculis neque</li>
      <li>Purus sodales ultricies</li>
      <li>Vestibulum laoreet porttitor sem</li>
      <li>Ac tristique libero volutpat at</li>
    </ul>
</li>
  <li>Faucibus porta lacus fringilla vel</li>
  <li>Aenean sit amet erat nunc</li>
  <li>Eget porttitor lorem</li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-unstyled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>Lorem ipsum dolor sit amet<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Consectetur adipiscing elit<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Integer molestie lorem at massa<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Facilisis in pretium nisl aliquet<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Nulla volutpat aliquam velit
    <span class="nt">&lt;ul&gt;</span>
      <span class="nt">&lt;li&gt;</span>Phasellus iaculis neque<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;</span>Purus sodales ultricies<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;</span>Vestibulum laoreet porttitor sem<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;</span>Ac tristique libero volutpat at<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Faucibus porta lacus fringilla vel<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Aenean sit amet erat nunc<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Eget porttitor lorem<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h3 id="inline">Inline</h3>

<p>Remove a listâs bullets and apply some light <code class="highlighter-rouge">margin</code> with a combination of two classes, <code class="highlighter-rouge">.list-inline</code> and <code class="highlighter-rouge">.list-inline-item</code>.</p>

<div class="bd-example" data-example-id="">
<ul class="list-inline">
<li class="list-inline-item">Lorem ipsum</li>
  <li class="list-inline-item">Phasellus iaculis</li>
  <li class="list-inline-item">Nulla volutpat</li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-inline-item"</span><span class="nt">&gt;</span>Lorem ipsum<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-inline-item"</span><span class="nt">&gt;</span>Phasellus iaculis<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-inline-item"</span><span class="nt">&gt;</span>Nulla volutpat<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h3 id="description-list-alignment">Description list alignment</h3>

<p>Align terms and descriptions horizontally by using our grid systemâs predefined classes (or semantic mixins). For longer terms, you can optionally add a <code class="highlighter-rouge">.text-truncate</code> class to truncate the text with an ellipsis.</p>

<div class="bd-example" data-example-id="">
<dl class="row">
<dt class="col-sm-3">Description lists</dt>
  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

  <dt class="col-sm-3">Euismod</dt>
  <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
  <dd class="col-sm-9 offset-sm-3">Donec id elit non mi porta gravida at eget metus.</dd>

  <dt class="col-sm-3">Malesuada porta</dt>
  <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

  <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
  <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

  <dt class="col-sm-3">Nesting</dt>
  <dd class="col-sm-9">
    <dl class="row">
<dt class="col-sm-4">Nested definition list</dt>
      <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
    </dl>
</dd>
</dl>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>Description lists<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>A description list is perfect for defining terms.<span class="nt">&lt;/dd&gt;</span>

  <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>Euismod<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.<span class="nt">&lt;/dd&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9 offset-sm-3"</span><span class="nt">&gt;</span>Donec id elit non mi porta gravida at eget metus.<span class="nt">&lt;/dd&gt;</span>

  <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>Malesuada porta<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>Etiam porta sem malesuada magna mollis euismod.<span class="nt">&lt;/dd&gt;</span>

  <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-3 text-truncate"</span><span class="nt">&gt;</span>Truncated term is truncated<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.<span class="nt">&lt;/dd&gt;</span>

  <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>Nesting<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-4"</span><span class="nt">&gt;</span>Nested definition list<span class="nt">&lt;/dt&gt;</span>
      <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-8"</span><span class="nt">&gt;</span>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.<span class="nt">&lt;/dd&gt;</span>
    <span class="nt">&lt;/dl&gt;</span>
  <span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span></code></pre></div>

<h2 id="responsive-typography">Responsive typography</h2>

<p><em>Responsive typography</em> refers to scaling text and components by simply adjusting the root elementâs <code class="highlighter-rouge">font-size</code> within a series of media queries. Bootstrap doesnât do this for you, but itâs fairly easy to add if you need it.</p>

<p>Hereâs an example of it in practice. Choose whatever <code class="highlighter-rouge">font-size</code>s and media queries you wish.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nt">html</span> <span class="p">{</span>
  <span class="nl">font-size</span><span class="p">:</span> <span class="m">14px</span><span class="p">;</span>
<span class="p">}</span>

<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
  <span class="nt">html</span> <span class="p">{</span>
    <span class="nl">font-size</span><span class="p">:</span> <span class="m">16px</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span>
  <span class="nt">html</span> <span class="p">{</span>
    <span class="nl">font-size</span><span class="p">:</span> <span class="m">20px</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span>
  <span class="nt">html</span> <span class="p">{</span>
    <span class="nl">font-size</span><span class="p">:</span> <span class="m">28px</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>
</div><div class=bd-content>
          <h1 class="bd-title" id="content">Tables</h1>
          <p>Due to the widespread use of tables across third-party widgets like calendars and date pickers, weâve designed our tables to be <strong>opt-in</strong>. Just add the base class <code class="highlighter-rouge">.table</code> to any <code class="highlighter-rouge">&lt;table&gt;</code>, then extend with custom styles or our various included modifier classes.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#examples" id="markdown-toc-examples">Examples</a></li>
  <li><a href="#table-head-options" id="markdown-toc-table-head-options">Table head options</a></li>
  <li><a href="#striped-rows" id="markdown-toc-striped-rows">Striped rows</a></li>
  <li><a href="#bordered-table" id="markdown-toc-bordered-table">Bordered table</a></li>
  <li><a href="#hoverable-rows" id="markdown-toc-hoverable-rows">Hoverable rows</a></li>
  <li><a href="#small-table" id="markdown-toc-small-table">Small table</a></li>
  <li><a href="#contextual-classes" id="markdown-toc-contextual-classes">Contextual classes</a></li>
  <li>
<a href="#responsive-tables" id="markdown-toc-responsive-tables">Responsive tables</a>    <ul>
<li><a href="#reflow" id="markdown-toc-reflow">Reflow</a></li>
    </ul>
</li>
</ul>
<h2 id="examples">Examples</h2>

<p>Using the most basic table markup, hereâs how <code class="highlighter-rouge">.table</code>-based tables look in Bootstrap. <strong>All table styles are inherited in Bootstrap 4</strong>, meaning any nested tables will be styled in the same manner as the parent.</p>

<div class="bd-example" data-example-id="">
<table class="table">
<thead><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<p>You can also invert the colorsâwith light text on dark backgroundsâwith <code class="highlighter-rouge">.table-inverse</code>.</p>

<div class="bd-example" data-example-id="">
<table class="table table-inverse">
<thead><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="table-head-options">Table head options</h2>

<p>Similar to default and inverse tables, use one of two modifier classes to make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>

<div class="bd-example" data-example-id="">
<table class="table">
<thead class="thead-inverse"><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
<table class="table">
<thead class="thead-default"><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead</span> <span class="na">class=</span><span class="s">"thead-inverse"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span>

<span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead</span> <span class="na">class=</span><span class="s">"thead-default"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="striped-rows">Striped rows</h2>

<p>Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<table class="table table-striped">
<thead><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<table class="table table-striped table-inverse">
<thead><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped table-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="bordered-table">Bordered table</h2>

<p>Add <code class="highlighter-rouge">.table-bordered</code> for borders on all sides of the table and cells.</p>

<div class="bd-example" data-example-id="">
<table class="table table-bordered">
<thead><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@TwBootstrap</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">4</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@TwBootstrap<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<table class="table table-bordered table-inverse">
<thead><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@TwBootstrap</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">4</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered table-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@TwBootstrap<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="hoverable-rows">Hoverable rows</h2>

<p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<table class="table table-hover">
<thead><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<table class="table table-hover table-inverse">
<thead><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover table-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="small-table">Small table</h2>

<p>Add <code class="highlighter-rouge">.table-sm</code> to make tables more compact by cutting cell padding in half.</p>

<div class="bd-example" data-example-id="">
<table class="table table-sm">
<thead><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-sm"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<table class="table table-sm table-inverse">
<thead><tr>
<th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-sm table-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="contextual-classes">Contextual classes</h2>

<p>Use contextual classes to color table rows or individual cells.</p>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
<colgroup>
<col class="col-xs-1">
<col class="col-xs-7">
</colgroup>
<thead><tr>
<th>Class</th>
        <th>Description</th>
      </tr></thead>
<tbody>
<tr>
<th scope="row">
          <code>.table-active</code>
        </th>
        <td>Applies the hover color to a particular row or cell</td>
      </tr>
<tr>
<th scope="row">
          <code>.table-success</code>
        </th>
        <td>Indicates a successful or positive action</td>
      </tr>
<tr>
<th scope="row">
          <code>.table-info</code>
        </th>
        <td>Indicates a neutral informative change or action</td>
      </tr>
<tr>
<th scope="row">
          <code>.table-warning</code>
        </th>
        <td>Indicates a warning that might need attention</td>
      </tr>
<tr>
<th scope="row">
          <code>.table-danger</code>
        </th>
        <td>Indicates a dangerous or potentially negative action</td>
      </tr>
</tbody>
</table>
</div>

<div class="bd-example">
  <table class="table">
<thead><tr>
<th>#</th>
        <th>Column heading</th>
        <th>Column heading</th>
        <th>Column heading</th>
      </tr></thead>
<tbody>
<tr class="table-active">
<th scope="row">1</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr>
<th scope="row">2</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr class="table-success">
<th scope="row">3</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr>
<th scope="row">4</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr class="table-info">
<th scope="row">5</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr>
<th scope="row">6</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr class="table-warning">
<th scope="row">7</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr>
<th scope="row">8</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr class="table-danger">
<th scope="row">9</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
</tbody>
</table>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- On rows --&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="nt">&lt;tr&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span></code></pre></figure><p>Regular table background variants are not available with the inverse table, however, you may use <a href="/utilities/colors/">text or background utilities</a> to achieve similar styles.</p>

<div class="bd-example">
  <table class="table table-inverse">
<thead><tr>
<th>#</th>
        <th>Column heading</th>
        <th>Column heading</th>
        <th>Column heading</th>
      </tr></thead>
<tbody>
<tr class="bg-primary">
<th scope="row">1</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr>
<th scope="row">2</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr class="bg-success">
<th scope="row">3</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr>
<th scope="row">4</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr class="bg-info">
<th scope="row">5</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr>
<th scope="row">6</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr class="bg-warning">
<th scope="row">7</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr>
<th scope="row">8</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
<tr class="bg-danger">
<th scope="row">9</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
</tbody>
</table>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- On rows --&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="nt">&lt;tr&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span></code></pre></figure><div class="bd-callout bd-callout-warning">
<h4 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h4>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies â such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h2 id="responsive-tables">Responsive tables</h2>

<p>Create responsive tables by wrapping any <code class="highlighter-rouge">.table</code> in <code class="highlighter-rouge">.table-responsive</code> to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>

<div class="bd-callout bd-callout-warning">
<h4 id="vertical-clippingtruncation">Vertical clipping/truncation</h4>

<p>Responsive tables make use of <code class="highlighter-rouge">overflow-y: hidden</code>, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off dropdown menus and other third-party widgets.</p>
</div>

<div class="bd-callout bd-callout-warning">
<h4 id="firefox-and-fieldsets">Firefox and fieldsets</h4>

<p>Firefox has some awkward fieldset styling involving <code class="highlighter-rouge">width</code> that interferes with the responsive table. This cannot be overridden without a Firefox-specific hack that we <strong>donât</strong> provide in Bootstrap:</p>

<figure class="highlight"><pre><code class="language-css" data-lang="css"><span class="k">@-moz-document</span> <span class="n">url-prefix</span><span class="p">()</span> <span class="p">{</span>
  <span class="nt">fieldset</span> <span class="p">{</span> <span class="nl">display</span><span class="p">:</span> <span class="nb">table-cell</span><span class="p">;</span> <span class="p">}</span>
<span class="p">}</span></code></pre></figure><p>For more information, read <a href="https://stackoverflow.com/questions/17408815/fieldset-resizes-wrong-appears-to-have-unremovable-min-width-min-content/17863685#17863685">this Stack Overflow answer</a>.</p>
</div>

<div class="bd-example">
  <div class="table-responsive">
    <table class="table">
<thead><tr>
<th>#</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
        </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
<tr>
<th scope="row">2</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
<tr>
<th scope="row">3</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
</tbody>
</table>
</div>

  <div class="table-responsive">
    <table class="table table-bordered">
<thead><tr>
<th>#</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
        </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
<tr>
<th scope="row">2</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
<tr>
<th scope="row">3</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
</tbody>
</table>
</div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure><h3 id="reflow">Reflow</h3>
<p>Turn traditional tables on their side by using <code class="highlighter-rouge">table-reflow</code>. When using reflow, the table header becomes the first column of the table, the first row within the table body becomes the second column, the second row becomes the third column, etc.</p>

<div class="bd-callout bd-callout-warning">
<h4 id="content-order-and-complex-tables">Content order and complex tables</h4>

<p>Beware that the <code class="highlighter-rouge">table-reflow</code> style changes the visual order of content. Make sure that you only apply this style to well-formed and simple data tables (and in particular, donât use this for layout tables) with appropriate <code class="highlighter-rouge">&lt;th&gt;</code> table header cells for each row and column.</p>

<p>In addition, this class will not work correctly for tables with cells that span multiple rows or columns (using <code class="highlighter-rouge">rowspan</code> or <code class="highlighter-rouge">colspan</code> attributes).</p>

</div>

<div class="bd-example" data-example-id="">
<table class="table table-reflow">
<thead><tr>
<th>#</th>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
    </tr></thead>
<tbody>
<tr>
<th scope="row">1</th>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
<tr>
<th scope="row">2</th>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
<tr>
<th scope="row">3</th>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
</tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-reflow"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>


        </div><div class=bd-content>
          <h1 class="bd-title" id="content">Alerts</h1>
          <p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li>
<a href="#examples" id="markdown-toc-examples">Examples</a>    <ul>
<li><a href="#link-color" id="markdown-toc-link-color">Link color</a></li>
      <li><a href="#additional-content" id="markdown-toc-additional-content">Additional content</a></li>
      <li><a href="#dismissing" id="markdown-toc-dismissing">Dismissing</a></li>
    </ul>
</li>
  <li>
<a href="#javascript-behavior" id="markdown-toc-javascript-behavior">JavaScript behavior</a>    <ul>
<li><a href="#triggers" id="markdown-toc-triggers">Triggers</a></li>
      <li><a href="#methods" id="markdown-toc-methods">Methods</a></li>
      <li><a href="#events" id="markdown-toc-events">Events</a></li>
    </ul>
</li>
</ul>
<h2 id="examples">Examples</h2>

<p>Alerts are available for any length of text, as well as an optional dismiss button. For proper styling, use one of the four <strong>required</strong> contextual classes (e.g., <code class="highlighter-rouge">.alert-success</code>). For inline dismissal, use the <a href="#dismissing">alerts jQuery plugin</a>.</p>

<div class="bd-example" data-example-id="">
<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully read this important alert message.
</div>
<div class="alert alert-info" role="alert">
  <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
</div>
<div class="alert alert-warning" role="alert">
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<div class="alert alert-danger" role="alert">
  <strong>Oh snap!</strong> Change a few things up and try submitting again.
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Well done!<span class="nt">&lt;/strong&gt;</span> You successfully read this important alert message.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This alert needs your attention, but it's not super important.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Warning!<span class="nt">&lt;/strong&gt;</span> Better check yourself, you're not looking too good.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Oh snap!<span class="nt">&lt;/strong&gt;</span> Change a few things up and try submitting again.
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h4>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies â such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h3 id="link-color">Link color</h3>

<p>Use the <code class="highlighter-rouge">.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>

<div class="bd-example" data-example-id="">
<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
</div>
<div class="alert alert-info" role="alert">
  <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
</div>
<div class="alert alert-warning" role="alert">
  <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
</div>
<div class="alert alert-danger" role="alert">
  <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Well done!<span class="nt">&lt;/strong&gt;</span> You successfully read <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>this important alert message<span class="nt">&lt;/a&gt;</span>.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>alert needs your attention<span class="nt">&lt;/a&gt;</span>, but it's not super important.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Warning!<span class="nt">&lt;/strong&gt;</span> Better check yourself, you're <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>not looking too good<span class="nt">&lt;/a&gt;</span>.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Oh snap!<span class="nt">&lt;/strong&gt;</span> <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>Change a few things up<span class="nt">&lt;/a&gt;</span> and try submitting again.
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="additional-content">Additional content</h3>

<p>Alerts can also contain additional HTML elements like headings and paragraphs.</p>

<div class="bd-example" data-example-id="">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"alert-heading"</span><span class="nt">&gt;</span>Well done!<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="dismissing">Dismissing</h3>

<p>Using the alert JavaScript plugin, itâs possible to dismiss any alert inline. Hereâs how:</p>

<ul>
<li>Be sure youâve loaded the alert plugin, or the compiled Bootstrap JavaScript.</li>
  <li>Add a dismiss button and the <code class="highlighter-rouge">.alert-dismissible</code> class, which adds extra padding to the right of the alert and positions the <code class="highlighter-rouge">.close</code> button.</li>
  <li>On the dismiss button, add the <code class="highlighter-rouge">data-dismiss="alert"</code> attribute, which triggers the JavaScript functionality. Be sure to use the <code class="highlighter-rouge">&lt;button&gt;</code> element with it for proper behavior across all devices.</li>
  <li>To animate alerts when dismissing them, be sure to add the <code class="highlighter-rouge">.fade</code> and <code class="highlighter-rouge">.in</code> classes.</li>
</ul>
<p>You can see this in action with a live demo:</p>

<div class="bd-example" data-example-id="">
<div class="alert alert-warning alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning alert-dismissible fade in"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Holy guacamole!<span class="nt">&lt;/strong&gt;</span> You should check in on some of those fields below.
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="javascript-behavior">JavaScript behavior</h2>

<h3 id="triggers">Triggers</h3>

<p>Enable dismissal of an alert via JavaScript:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s2">".alert"</span><span class="p">).</span><span class="nx">alert</span><span class="p">()</span></code></pre></figure><p>Or with <code class="highlighter-rouge">data</code> attributes on a button <strong>within the alert</strong>, as demonstrated above:</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span></code></pre></figure><p>Note that closing an alert will remove it from the DOM.</p>

<h3 id="methods">Methods</h3>

<table>
<thead><tr>
<th>Method</th>
      <th>Description</th>
    </tr></thead>
<tbody>
<tr>
<td><code class="highlighter-rouge">$().alert()</code></td>
      <td>Makes an alert listen for click events on descendant elements which have the <code class="highlighter-rouge">data-dismiss="alert"</code> attribute. (Not necessary when using the data-apiâs auto-initialization.)</td>
    </tr>
<tr>
<td><code class="highlighter-rouge">$().alert('close')</code></td>
      <td>Closes an alert by removing it from the DOM. If the <code class="highlighter-rouge">.fade</code> and <code class="highlighter-rouge">.in</code> classes are present on the element, the alert will fade out before it is removed.</td>
    </tr>
</tbody>
</table>
<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s2">".alert"</span><span class="p">).</span><span class="nx">alert</span><span class="p">(</span><span class="s1">'close'</span><span class="p">)</span></code></pre></figure><h3 id="events">Events</h3>

<p>Bootstrapâs alert plugin exposes a few events for hooking into alert functionality.</p>

<table>
<thead><tr>
<th>Event</th>
      <th>Description</th>
    </tr></thead>
<tbody>
<tr>
<td><code class="highlighter-rouge">close.bs.alert</code></td>
      <td>This event fires immediately when the <code>close</code> instance method is called.</td>
    </tr>
<tr>
<td><code class="highlighter-rouge">closed.bs.alert</code></td>
      <td>This event is fired when the alert has been closed (will wait for CSS transitions to complete).</td>
    </tr>
</tbody>
</table>
<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myAlert'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'closed.bs.alert'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="c1">// do somethingâ¦</span>
<span class="p">})</span></code></pre></figure>
</div><div class=bd-content>
          <h1 class="bd-title" id="content">Breadcrumb</h1>
          <p>Indicate the current pageâs location within a navigational hierarchy. Separators are automatically added in CSS through <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/::before"><code class="highlighter-rouge">::before</code></a> and <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/content"><code class="highlighter-rouge">content</code></a>.</p>

<div class="bd-example" data-example-id="">
<ol class="breadcrumb">
<li class="breadcrumb-item active">Home</li>
</ol>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Library</li>
</ol>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="#">Library</a></li>
  <li class="breadcrumb-item active">Data</li>
</ol>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span>
<span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span>
<span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span><span class="nt">&gt;</span>Data<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span></code></pre></div>

<p>Similar to our navigation components, breadcrumbs work fine with or without the usage of list markup.</p>

<div class="bd-example" data-example-id="">
<nav class="breadcrumb"><a class="breadcrumb-item" href="#">Home</a>
  <a class="breadcrumb-item" href="#">Library</a>
  <a class="breadcrumb-item" href="#">Data</a>
  <span class="breadcrumb-item active">Bootstrap</span>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Data<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span><span class="nt">&gt;</span>Bootstrap<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>


        </div><div class=bd-content>
          <h1 class="bd-title" id="content">Buttons</h1>
          <p>Use Bootstrapâs custom button styles for actions in forms, dialogs, and more. Includes support for a handful of contextual variations, sizes, states, and more.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#examples" id="markdown-toc-examples">Examples</a></li>
  <li><a href="#button-tags" id="markdown-toc-button-tags">Button tags</a></li>
  <li><a href="#outline-buttons" id="markdown-toc-outline-buttons">Outline buttons</a></li>
  <li><a href="#sizes" id="markdown-toc-sizes">Sizes</a></li>
  <li><a href="#active-state" id="markdown-toc-active-state">Active state</a></li>
  <li><a href="#disabled-state" id="markdown-toc-disabled-state">Disabled state</a></li>
  <li>
<a href="#button-plugin" id="markdown-toc-button-plugin">Button plugin</a>    <ul>
<li><a href="#toggle-states" id="markdown-toc-toggle-states">Toggle states</a></li>
      <li><a href="#checkbox-and-radio-buttons" id="markdown-toc-checkbox-and-radio-buttons">Checkbox and radio buttons</a></li>
      <li><a href="#methods" id="markdown-toc-methods">Methods</a></li>
    </ul>
</li>
</ul>
<h2 id="examples">Examples</h2>

<p>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>

<div class="bd-example" data-example-id="">
<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<button type="button" class="btn btn-primary">Primary</button>

<!-- Secondary, outline button -->
<button type="button" class="btn btn-secondary">Secondary</button>

<!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success">Success</button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Info</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Warning</button>

<!-- Indicates a dangerous or potentially negative action -->
<button type="button" class="btn btn-danger">Danger</button>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
<button type="button" class="btn btn-link">Link</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Secondary, outline button --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates a successful or positive action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Contextual button for informational alert messages --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates caution should be taken with this action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h4>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies â such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h2 id="button-tags">Button tags</h2>

<p>The <code class="highlighter-rouge">.btn</code> classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element. However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</p>

<p>When using button classes on <code class="highlighter-rouge">&lt;a&gt;</code> elements that are used to trigger in-page functionality (like collapsing content), rather than linking to new pages or sections within the current page, these links should be given a <code class="highlighter-rouge">role="button"</code> to appropriately convey their purpose to assistive technologies such as screen readers.</p>

<div class="bd-example" data-example-id="">
<a class="btn btn-primary" href="#" role="button">Link</a>
<button class="btn btn-primary" type="submit">Button</button>
<input class="btn btn-primary" type="button" value="Input"><input class="btn btn-primary" type="submit" value="Submit"><input class="btn btn-primary" type="reset" value="Reset">
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">value=</span><span class="s">"Input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"reset"</span> <span class="na">value=</span><span class="s">"Reset"</span><span class="nt">&gt;</span></code></pre></div>

<h2 id="outline-buttons">Outline buttons</h2>

<p>In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code class="highlighter-rouge">.btn-outline-*</code> ones to remove all background images and colors on any button.</p>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h2 id="sizes">Sizes</h2>

<p>Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-primary btn-lg">Large button</button>
<button type="button" class="btn btn-secondary btn-lg">Large button</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-primary btn-sm">Small button</button>
<button type="button" class="btn btn-secondary btn-sm">Small button</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span></code></pre></div>

<p>Create block level buttonsâthose that span the full width of a parentâby adding <code class="highlighter-rouge">.btn-block</code>.</p>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
<button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h2 id="active-state">Active state</h2>

<p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. <strong>Thereâs no need to add a class to <code class="highlighter-rouge">&lt;button&gt;</code>s as they use a pseudo-class</strong>. However, you can still force the same active appearance with <code class="highlighter-rouge">.active</code> (and include the <code>aria-pressed="true"</code> attribute) should you need to replicate the state programmatically.</p>

<div class="bd-example" data-example-id="">
<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
<a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-pressed=</span><span class="s">"true"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-pressed=</span><span class="s">"true"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre></div>

<h2 id="disabled-state">Disabled state</h2>

<p>Make buttons look inactive by adding the <code class="highlighter-rouge">disabled</code> boolean attribute to any <code class="highlighter-rouge">&lt;button&gt;</code> element.</p>

<div class="bd-callout bd-callout-info">
<p><strong>Heads up!</strong> IE9 and below render disabled buttons with gray, shadowed text that we canât override.</p>
</div>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
<button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-primary"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span></code></pre></div>

<p>Disabled buttons using the <code class="highlighter-rouge">&lt;a&gt;</code> element behave a bit different:</p>

<ul>
<li>
<code class="highlighter-rouge">&lt;a&gt;</code>s donât support the <code class="highlighter-rouge">disabled</code> attribute, so you must add the <code class="highlighter-rouge">.disabled</code> class to make it visually appear disabled.</li>
  <li>Some future-friendly styles are included to disable all <code class="highlighter-rouge">pointer-events</code> on anchor buttons. In browsers which support that property, you wonât see the disabled cursor at all.</li>
  <li>Disabled buttons should include the <code class="highlighter-rouge">aria-disabled="true"</code> attribute to indicate the state of the element to assistive technologies.</li>
</ul>
<div class="bd-example" data-example-id="">
<a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
<a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-disabled=</span><span class="s">"true"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-disabled=</span><span class="s">"true"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="link-functionality-caveat">Link functionality caveat</h4>

<p>The <code class="highlighter-rouge">.disabled</code> class uses <code class="highlighter-rouge">pointer-events: none</code> to try to disable the link functionality of <code class="highlighter-rouge">&lt;a&gt;</code>s, but that CSS property is not yet standardized. In addition, even in browsers that do support <code class="highlighter-rouge">pointer-events: none</code>, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, add a <code class="highlighter-rouge">tabindex="-1"</code> attribute on these links (to prevent them from receiving keyboard focus) and use custom JavaScript to disable their functionality.</p>
</div>

<h2 id="button-plugin">Button plugin</h2>

<p>Do more with buttons. Control button states or create groups of buttons for more components like toolbars.</p>

<h3 id="toggle-states">Toggle states</h3>

<p>Add <code class="highlighter-rouge">data-toggle="button"</code> to toggle a buttonâs <code class="highlighter-rouge">active</code> state. If youâre pre-toggling a button, you must manually add the <code class="highlighter-rouge">.active</code> class <strong>and</strong> <code class="highlighter-rouge">aria-pressed="true"</code> to the <code class="highlighter-rouge">&lt;button&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  Single toggle
</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"button"</span> <span class="na">aria-pressed=</span><span class="s">"false"</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span>
  Single toggle
<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h3 id="checkbox-and-radio-buttons">Checkbox and radio buttons</h3>

<p>Bootstrapâs <code class="highlighter-rouge">.button</code> styles can be applied to other elements, such as <code class="highlighter-rouge">&lt;label&gt;</code>s, to provide checkbox or radio style button toggling. Add <code class="highlighter-rouge">data-toggle="buttons"</code> to a <code class="highlighter-rouge">.btn-group</code> containing those modified buttons to enable toggling in their respective styles.</p>

<p>The checked state for these buttons is <strong>only updated via <code class="highlighter-rouge">click</code> event</strong> on the button. If you use another method to update the inputâe.g., with <code class="highlighter-rouge">&lt;input type="reset"&gt;</code> or by manually applying the inputâs <code class="highlighter-rouge">checked</code> propertyâyouâll need to toggle <code class="highlighter-rouge">.active</code> on the <code class="highlighter-rouge">&lt;label&gt;</code> manually.</p>

<p>Note that pre-checked buttons require you to manually add the <code class="highlighter-rouge">.active</code> class to the inputâs <code class="highlighter-rouge">&lt;label&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="checkbox" checked autocomplete="off"> Checkbox 1 (pre-checked)
  </label>
  <label class="btn btn-primary">
    <input type="checkbox" autocomplete="off"> Checkbox 2
  </label>
  <label class="btn btn-primary">
    <input type="checkbox" autocomplete="off"> Checkbox 3
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">data-toggle=</span><span class="s">"buttons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary active"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">checked</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span> Checkbox 1 (pre-checked)
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span> Checkbox 2
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span> Checkbox 3
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="radio" name="options" id="option1" autocomplete="off" checked> Radio 1 (preselected)
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="options" id="option2" autocomplete="off"> Radio 2
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="options" id="option3" autocomplete="off"> Radio 3
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">data-toggle=</span><span class="s">"buttons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary active"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"options"</span> <span class="na">id=</span><span class="s">"option1"</span> <span class="na">autocomplete=</span><span class="s">"off"</span> <span class="na">checked</span><span class="nt">&gt;</span> Radio 1 (preselected)
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"options"</span> <span class="na">id=</span><span class="s">"option2"</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span> Radio 2
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"options"</span> <span class="na">id=</span><span class="s">"option3"</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span> Radio 3
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="methods">Methods</h3>

<table>
<thead><tr>
<th>Method</th>
      <th>Description</th>
    </tr></thead>
<tbody><tr>
<td><code class="highlighter-rouge">$().button('toggle')</code></td>
      <td>Toggles push state. Gives the button the appearance that it has been activated.</td>
    </tr></tbody>
</table>
</div><div class=bd-content>
          <h1 class="bd-title" id="content">Button group</h1>
          <p>Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with <a href="/components/buttons/#button-plugin">our buttons plugin</a>.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#basic-example" id="markdown-toc-basic-example">Basic example</a></li>
  <li><a href="#button-toolbar" id="markdown-toc-button-toolbar">Button toolbar</a></li>
  <li><a href="#sizing" id="markdown-toc-sizing">Sizing</a></li>
  <li><a href="#nesting" id="markdown-toc-nesting">Nesting</a></li>
  <li><a href="#vertical-variation" id="markdown-toc-vertical-variation">Vertical variation</a></li>
  <li><a href="#tooltips-and-popovers" id="markdown-toc-tooltips-and-popovers">Tooltips and popovers</a></li>
</ul>
<h2 id="basic-example">Basic example</h2>

<p>Wrap a series of buttons with <code class="highlighter-rouge">.btn</code> in <code class="highlighter-rouge">.btn-group</code>.</p>

<div class="bd-example" data-example-id="">
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Left</button>
  <button type="button" class="btn btn-secondary">Middle</button>
  <button type="button" class="btn btn-secondary">Right</button>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"Basic example"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Left<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Middle<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Right<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="button-toolbar">Button toolbar</h2>

<p>Combine sets of button groups into button toolbars for more complex components.</p>

<div class="bd-example" data-example-id="">
<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group" role="group" aria-label="First group">
    <button type="button" class="btn btn-secondary">1</button>
    <button type="button" class="btn btn-secondary">2</button>
    <button type="button" class="btn btn-secondary">3</button>
    <button type="button" class="btn btn-secondary">4</button>
  </div>
  <div class="btn-group" role="group" aria-label="Second group">
    <button type="button" class="btn btn-secondary">5</button>
    <button type="button" class="btn btn-secondary">6</button>
    <button type="button" class="btn btn-secondary">7</button>
  </div>
  <div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-secondary">8</button>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-toolbar"</span> <span class="na">role=</span><span class="s">"toolbar"</span> <span class="na">aria-label=</span><span class="s">"Toolbar with button groups"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"First group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"Second group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>5<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>6<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>7<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"Third group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>8<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="sizing">Sizing</h2>

<p>Instead of applying button sizing classes to every button in a group, just add <code class="highlighter-rouge">.btn-group-*</code> to each <code class="highlighter-rouge">.btn-group</code>, including each one when nesting multiple groups.</p>

<div class="bd-example">
  <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
    <button type="button" class="btn btn-secondary">Left</button>
    <button type="button" class="btn btn-secondary">Middle</button>
    <button type="button" class="btn btn-secondary">Right</button>
  </div>
  <br><div class="btn-group" role="group" aria-label="Default button group">
    <button type="button" class="btn btn-secondary">Left</button>
    <button type="button" class="btn btn-secondary">Middle</button>
    <button type="button" class="btn btn-secondary">Right</button>
  </div>
  <br><div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
    <button type="button" class="btn btn-secondary">Left</button>
    <button type="button" class="btn btn-secondary">Middle</button>
    <button type="button" class="btn btn-secondary">Right</button>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-lg"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-sm"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure><h2 id="nesting">Nesting</h2>

<p>Place a <code class="highlighter-rouge">.btn-group</code> within another <code class="highlighter-rouge">.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>

<div class="bd-example" data-example-id="">
<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-secondary">1</button>
  <button type="button" class="btn btn-secondary">2</button>

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"Button group with nested dropdown"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/button&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">id=</span><span class="s">"btnGroupDrop1"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
      Dropdown
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"btnGroupDrop1"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="vertical-variation">Vertical variation</h2>

<p>Make a set of buttons appear vertically stacked rather than horizontally. <strong>Split button dropdowns are not supported here.</strong></p>

<div class="bd-example">
  <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
    <button type="button" class="btn btn-secondary">Button</button>
    <button type="button" class="btn btn-secondary">Button</button>
    <div class="btn-group" role="group">
      <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
        <a class="dropdown-item" href="#">Dropdown link</a>
        <a class="dropdown-item" href="#">Dropdown link</a>
      </div>
    </div>
    <button type="button" class="btn btn-secondary">Button</button>
    <button type="button" class="btn btn-secondary">Button</button>
    <div class="btn-group" role="group">
      <button id="btnGroupVerticalDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
        <a class="dropdown-item" href="#">Dropdown link</a>
        <a class="dropdown-item" href="#">Dropdown link</a>
      </div>
    </div>
    <div class="btn-group" role="group">
      <button id="btnGroupVerticalDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
        <a class="dropdown-item" href="#">Dropdown link</a>
        <a class="dropdown-item" href="#">Dropdown link</a>
      </div>
    </div>
    <div class="btn-group" role="group">
      <button id="btnGroupVerticalDrop4" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
        <a class="dropdown-item" href="#">Dropdown link</a>
        <a class="dropdown-item" href="#">Dropdown link</a>
      </div>
    </div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group-vertical"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></figure><h2 id="tooltips-and-popovers">Tooltips and popovers</h2>

<p>Due to the specific implementation (and some other components), a bit of special casing is required for tooltips and popovers within button groups. <strong>Youâll have to specify the option <code class="highlighter-rouge">container: 'body'</code></strong> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).</p>

        </div><div class=bd-content>
          <h1 class="bd-title" id="content">Cards</h1>
          <p>A <strong>card</strong> is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options.</p>

<p>If youâre familiar with Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those components is available as modifier classes for cards.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#example" id="markdown-toc-example">Example</a></li>
  <li><a href="#content-types" id="markdown-toc-content-types">Content types</a></li>
  <li><a href="#sizing" id="markdown-toc-sizing">Sizing</a></li>
  <li><a href="#text-alignment" id="markdown-toc-text-alignment">Text alignment</a></li>
  <li><a href="#header-and-footer" id="markdown-toc-header-and-footer">Header and footer</a></li>
  <li><a href="#header-nav" id="markdown-toc-header-nav">Header nav</a></li>
  <li><a href="#image-caps" id="markdown-toc-image-caps">Image caps</a></li>
  <li><a href="#image-overlays" id="markdown-toc-image-overlays">Image overlays</a></li>
  <li><a href="#inverted-text" id="markdown-toc-inverted-text">Inverted text</a></li>
  <li><a href="#background-variants" id="markdown-toc-background-variants">Background variants</a></li>
  <li><a href="#outline-variants" id="markdown-toc-outline-variants">Outline variants</a></li>
  <li><a href="#groups" id="markdown-toc-groups">Groups</a></li>
  <li><a href="#decks" id="markdown-toc-decks">Decks</a></li>
  <li><a href="#columns" id="markdown-toc-columns">Columns</a></li>
</ul>
<h2 id="example">Example</h2>

<p>Cards require a small amount of markup and classes to provide you with as much control as possible. These classes and markup are flexible though and can typically be remixed and extended with ease. For example, if your card has no flush content like images, feel free to put the <code class="highlighter-rouge">.card-block</code> class on the <code class="highlighter-rouge">.card</code> element to consolidate your markup.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap"><div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="content-types">Content types</h2>

<p>Cards support a wide variety of content, including images, text, list groups, links, and more. Mix and match multiple content types to create the card you need.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt="Card image cap"><div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
<li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
<div class="card-block">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group list-group-flush"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Card link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Lists can be added to a card by adding a list group.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <ul class="list-group list-group-flush">
<li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group list-group-flush"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p><code class="highlighter-rouge">.card-img-top</code> places an image to the top of the card. With <code class="highlighter-rouge">.card-text</code>, text can be added to the card. Text within <code class="highlighter-rouge">.card-text</code> can also be styled with the standard HTML tags.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt="Card image cap"><div class="card-block">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Card titles are used by adding <code class="highlighter-rouge">.card-title</code> to a <code class="highlighter-rouge">&lt;h*&gt;</code> tag. In the same way, links are added and placed next to each other by adding <code class="highlighter-rouge">.card-link</code> to  a <code class="highlighter-rouge">&lt;a&gt;</code> tag.</p>

<div class="bd-example" data-example-id="">
<div class="card card-block">
  <h4 class="card-title">Card title</h4>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Card link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Subtitles are used by adding a <code class="highlighter-rouge">.card-subtitle</code> to an <code class="highlighter-rouge">&lt;h*&gt;</code> tag. If the <code class="highlighter-rouge">.card-title</code> and the <code class="highlighter-rouge">.card-subtitle</code> items are placed in a <code class="highlighter-rouge">.card-block</code> item, the card title and subtitle are aligned nicely.</p>

<p>The multiple content types can be easily combined to create the card you need. See below for an example.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
  </div>
  <img data-src="holder.js/100px180/?text=Image" alt="Card image"><div class="card-block">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"card-subtitle text-muted"</span><span class="nt">&gt;</span>Support card subtitle<span class="nt">&lt;/h6&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Card link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="sizing">Sizing</h2>

<p>Constrain the width of cards via custom CSS, our predefined grid classes, or with custom styles using our grid mixins.</p>

<p>Using the grid:</p>

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-sm-6">
    <div class="card card-block">
      <h3 class="card-title">Special title treatment</h3>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card card-block">
      <h3 class="card-title">Special title treatment</h3>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h3&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h3&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Using custom widths:</p>

<div class="bd-example" data-example-id="">
<div class="card card-block" style="width: 18rem;">
  <h3 class="card-title">Special title treatment</h3>
  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span> <span class="na">style=</span><span class="s">"width: 18rem;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="text-alignment">Text alignment</h2>

<p>You can quickly change the text alignment of any cardâin its entirety or specific partsâwith our <a href="/utilities/typography/#text-alignment">text align classes</a>.</p>

<div class="bd-example" data-example-id="">
<div class="card card-block">
  <h4 class="card-title">Special title treatment</h4>
  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>

<div class="card card-block text-xs-center">
  <h4 class="card-title">Special title treatment</h4>
  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>

<div class="card card-block text-xs-right">
  <h4 class="card-title">Special title treatment</h4>
  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block text-xs-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="header-and-footer">Header and footer</h2>

<p>Add an optional header and/or footer within a card.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    Featured
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Card headers can be styled by adding <code class="highlighter-rouge">.card-header</code> to <code class="highlighter-rouge">&lt;h*&gt;</code> elements.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <h3 class="card-header">Featured</h3>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>Featured<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    Quote
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="card text-xs-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    Featured
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-footer text-muted"</span><span class="nt">&gt;</span>
    2 days ago
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="header-nav">Header nav</h2>

<p>Use Bootstrapâs nav pills or tabs within a card header. Be sure to always include a <code class="highlighter-rouge">.pull-*-*</code> utility class for proper alignment.</p>

<div class="bd-example" data-example-id="">
<div class="card text-xs-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs float-xs-left">
<li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
</div>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs card-header-tabs float-xs-left"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="card text-xs-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills float-xs-left">
<li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
</div>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills card-header-pills float-xs-left"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="image-caps">Image caps</h2>

<p>Similar to headers and footers, cards include top and bottom image caps.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap"><div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <img class="card-img-bottom" data-src="holder.js/100px180/" alt="Card image cap">
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-bottom"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="image-overlays">Image overlays</h2>

<p>Turn an image into a card background and overlay your cardâs text. Depending on the image, you may or may not need <code class="highlighter-rouge">.card-inverse</code> (see below).</p>

<div class="bd-example" data-example-id="">
<div class="card card-inverse">
  <img class="card-img" data-src="holder.js/100px270/#55595c:#373a3c/text:Card image" alt="Card image"><div class="card-img-overlay">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-img-overlay"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="inverted-text">Inverted text</h2>

<p>Cards include a class for quickly toggling <strong>the text color</strong>. By default, cards use dark text and assume a light background. <strong>Add <code class="highlighter-rouge">.card-inverse</code> for white text</strong> and specify the <code class="highlighter-rouge">background-color</code> and <code class="highlighter-rouge">border-color</code> to go with it.</p>

<p>You can also use <code class="highlighter-rouge">.card-inverse</code> with the <a href="#background-variants">contextual backgrounds variants</a>.</p>

<div class="bd-example" data-example-id="">
<div class="card card-inverse" style="background-color: #333; border-color: #333;">
  <div class="card-block">
    <h3 class="card-title">Special title treatment</h3>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse"</span> <span class="na">style=</span><span class="s">"background-color: #333; border-color: #333;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="background-variants">Background variants</h2>

<p>Cards include their own variant classes for quickly changing the <code class="highlighter-rouge">background-color</code> and <code class="highlighter-rouge">border-color</code> of a card. <strong>Darker colors require the use of <code class="highlighter-rouge">.card-inverse</code>.</strong></p>

<div class="bd-example" data-example-id="">
<div class="card card-inverse card-primary text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
<div class="card card-inverse card-success text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
<div class="card card-inverse card-info text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
<div class="card card-inverse card-warning text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
<div class="card card-inverse card-danger text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse card-primary text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse card-success text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse card-info text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse card-warning text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse card-danger text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h4>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies â such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h2 id="outline-variants">Outline variants</h2>

<p>In need of a colored card, but not the hefty background colors they bring? Replace the default modifier classes with the <code class="highlighter-rouge">.card-outline-*</code> ones to style just the <code class="highlighter-rouge">border-color</code> of a card.</p>

<div class="bd-example" data-example-id="">
<div class="card card-outline-primary text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
<div class="card card-outline-secondary text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
<div class="card card-outline-success text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
<div class="card card-outline-info text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
<div class="card card-outline-warning text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
<div class="card card-outline-danger text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-primary text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-secondary text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-success text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-info text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-warning text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-danger text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="groups">Groups</h2>

<p>Use card groups to render cards as a single, attached element with equal width and height columns. By default, card groups use <code class="highlighter-rouge">display: table;</code> and <code class="highlighter-rouge">table-layout: fixed;</code> to achieve their uniform sizing. However, enabling <a href="/getting-started/flexbox/">flexbox mode</a> can switch that to use <code class="highlighter-rouge">display: flex;</code> and provide the same effect.</p>

<p>Only applies to small devices and above.</p>

<div class="bd-example" data-example-id="">
<div class="card-group">
  <div class="card">
    <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap"><div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap"><div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap"><div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This card has supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="decks">Decks</h2>

<p>Need a set of equal width and height cards that arenât attached to one another? Use card decks. By default, card decks require two wrapping elements: <code class="highlighter-rouge">.card-deck-wrapper</code> and a <code class="highlighter-rouge">.card-deck</code>. We use table styles for the sizing and the gutters on <code class="highlighter-rouge">.card-deck</code>. The <code class="highlighter-rouge">.card-deck-wrapper</code> is used to negative margin out the <code class="highlighter-rouge">border-spacing</code> on the <code class="highlighter-rouge">.card-deck</code>.</p>

<p>Only applies to small devices and above.</p>

<p><strong>ProTip!</strong> If you enable <a href="/getting-started/flexbox/">flexbox mode</a>, you can remove the <code class="highlighter-rouge">.card-deck-wrapper</code>.</p>

<div class="bd-example" data-example-id="">
<div class="card-deck-wrapper">
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" data-src="holder.js/100px200/" alt="Card image cap"><div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" data-src="holder.js/100px200/" alt="Card image cap"><div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" data-src="holder.js/100px200/" alt="Card image cap"><div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-deck-wrapper"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-deck"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This card has supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="columns">Columns</h2>

<p>Cards can be organized into <a href="http://masonry.desandro.com">Masonry</a>-like columns with just CSS by wrapping them in <code class="highlighter-rouge">.card-columns</code>. Cards are ordered from top to bottom and left to right when wrapped in <code class="highlighter-rouge">.card-columns</code>.</p>

<p>Only applies to small devices and above.</p>

<p><strong>Heads up!</strong> This is <strong>not available in IE9 and below</strong> as they have no support for the <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Using_multi-column_layouts"><code class="highlighter-rouge">column-*</code> CSS properties</a>.</p>

<div class="bd-example" data-example-id="">
<div class="card-columns">
  <div class="card">
    <img class="card-img-top img-fluid" data-src="holder.js/100px160/" alt="Card image cap"><div class="card-block">
      <h4 class="card-title">Card title that wraps to a new line</h4>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer><small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
</blockquote>
  </div>
  <div class="card">
    <img class="card-img-top img-fluid" data-src="holder.js/100px160/" alt="Card image cap"><div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card card-block card-inverse card-primary text-xs-center">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer><small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
</blockquote>
  </div>
  <div class="card card-block text-xs-center">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <div class="card">
    <img class="card-img img-fluid" data-src="holder.js/100px260/" alt="Card image">
</div>
  <div class="card card-block text-xs-right">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer><small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
</blockquote>
  </div>
  <div class="card card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-columns"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top img-fluid"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title that wraps to a new line<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>
          Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;</span>
        <span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top img-fluid"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This card has supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block card-inverse card-primary text-xs-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>
        <span class="nt">&lt;small&gt;</span>
          Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;</span>
        <span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block text-xs-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This card has supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img img-fluid"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block text-xs-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>
          Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;</span>
        <span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Card columns can also be extended and customized with some additional code. Shown below is an extension of the <code class="highlighter-rouge">.card-columns</code> class using the same CSS we useâCSS columnsâ to generate a set of responsive tiers for changing the number of columns.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.card-columns</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">column-count</span><span class="p">:</span> <span class="m">4</span><span class="p">;</span>
  <span class="p">}</span>
  <span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">xl</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">column-count</span><span class="p">:</span> <span class="m">5</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>
</div><div class=bd-content>
          <h1 class="bd-title" id="content">Dropdowns</h1>
          <p>Dropdowns are toggleable, contextual overlays for displaying lists of links and more. Theyâre made interactive with the included Bootstrap dropdown JavaScript plugin. Theyâre toggled by clicking, not by hovering; this is <a href="http://markdotto.com/2012/02/27/bootstrap-explained-dropdowns/">an intentional design decision.</a></p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li>
<a href="#examples" id="markdown-toc-examples">Examples</a>    <ul>
<li><a href="#single-button-dropdowns" id="markdown-toc-single-button-dropdowns">Single button dropdowns</a></li>
      <li><a href="#split-button-dropdowns" id="markdown-toc-split-button-dropdowns">Split button dropdowns</a></li>
    </ul>
</li>
  <li><a href="#sizing" id="markdown-toc-sizing">Sizing</a></li>
  <li><a href="#dropup-variation" id="markdown-toc-dropup-variation">Dropup variation</a></li>
  <li><a href="#menu-items" id="markdown-toc-menu-items">Menu items</a></li>
  <li><a href="#menu-alignment" id="markdown-toc-menu-alignment">Menu alignment</a></li>
  <li><a href="#menu-headers" id="markdown-toc-menu-headers">Menu headers</a></li>
  <li><a href="#menu-dividers" id="markdown-toc-menu-dividers">Menu dividers</a></li>
  <li><a href="#disabled-menu-items" id="markdown-toc-disabled-menu-items">Disabled menu items</a></li>
  <li>
<a href="#usage" id="markdown-toc-usage">Usage</a>    <ul>
<li><a href="#via-data-attributes" id="markdown-toc-via-data-attributes">Via data attributes</a></li>
      <li><a href="#via-javascript" id="markdown-toc-via-javascript">Via JavaScript</a></li>
      <li><a href="#options" id="markdown-toc-options">Options</a></li>
      <li><a href="#methods" id="markdown-toc-methods">Methods</a></li>
      <li><a href="#events" id="markdown-toc-events">Events</a></li>
    </ul>
</li>
</ul>
<h2 id="examples">Examples</h2>

<p>Wrap the dropdownâs toggle (your button or link) and the dropdown menu within <code class="highlighter-rouge">.dropdown</code>, or another element that declares <code class="highlighter-rouge">position: relative;</code>. Dropdowns can be triggered from <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;button&gt;</code> elements to better fit your potential needs.</p>

<h3 id="single-button-dropdowns">Single button dropdowns</h3>

<p>Any single <code class="highlighter-rouge">.btn</code> can be turned into a dropdown toggle with some markup changes. Hereâs how you can put them to work with either <code class="highlighter-rouge">&lt;button&gt;</code> elements:</p>

<div class="bd-example" data-example-id="">
<div class="dropdown open">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown open"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">id=</span><span class="s">"dropdownMenuButton"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Dropdown button
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuButton"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>And with <code class="highlighter-rouge">&lt;a&gt;</code> elements:</p>

<div class="bd-example" data-example-id="">
<div class="dropdown open">
  <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown open"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">href=</span><span class="s">"https://example.com"</span> <span class="na">id=</span><span class="s">"dropdownMenuLink"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Dropdown link
  <span class="nt">&lt;/a&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuLink"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>The best part is you can do this with any button variant, too:</p>

<div class="bd-example">
  <div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Example single danger button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Action
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure><h3 id="split-button-dropdowns">Split button dropdowns</h3>

<p>Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of <code class="highlighter-rouge">.dropdown-toggle-split</code> for proper spacing around the dropdown caret.</p>

<p>We use this extra class to reduce the horizontal <code class="highlighter-rouge">padding</code> on either side of the caret by 25% and remove the <code class="highlighter-rouge">margin-left</code> thatâs added for regular button dropdowns. Those extra changes keep the caret centered in the split button and provide a more appropriately sized hit area next to the main button.</p>

<div class="bd-example">
  <div class="btn-group">
    <button type="button" class="btn btn-secondary">Default</button>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
<!-- /btn-group -->
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Example split danger button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger dropdown-toggle dropdown-toggle-split"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure><h2 id="sizing">Sizing</h2>

<p>Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>

<div class="bd-example">
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group">
      <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Large button
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
<!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-lg btn-secondary">Large split button</button>
      <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
<!-- /btn-group -->
  </div>
<!-- /btn-toolbar -->
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group">
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Small button
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
<!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-sm btn-secondary">Small split button</button>
      <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
<!-- /btn-group -->
  </div>
<!-- /btn-toolbar -->
</div>
<!-- /example -->

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Large button groups (default and split) --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Large button
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Large button
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Small button groups (default and split) --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-sm dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Small button
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-sm dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Small button
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure><h2 id="dropup-variation">Dropup variation</h2>

<p>Trigger dropdown menus above elements by adding <code class="highlighter-rouge">.dropup</code> to the parent element.</p>

<div class="bd-example">
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group dropup">
      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropup
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>

    <div class="btn-group dropup">
      <button type="button" class="btn btn-secondary">
        Split dropup
      </button>
      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Default dropup button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropup"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Dropup<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Split dropup button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropup"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>
    Split dropup
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure><h2 id="menu-items">Menu items</h2>

<p>Historically dropdown menu contents <em>had</em> to be links, but thatâs no longer the case with v4. Now you can optionally use <code class="highlighter-rouge">&lt;button&gt;</code> elements in your dropdowns instead of just <code class="highlighter-rouge">&lt;a&gt;</code>s.</p>

<div class="bd-example" data-example-id="">
<div class="dropdown open">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown open"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">id=</span><span class="s">"dropdownMenu2"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Dropdown
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu2"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="menu-alignment">Menu alignment</h2>

<p>By default, a dropdown menu is automatically positioned 100% from the top and along the left side of its parent. Add <code class="highlighter-rouge">.dropdown-menu-right</code> to a <code class="highlighter-rouge">.dropdown-menu</code> to right align the dropdown menu.</p>

<div class="bd-callout bd-callout-info">
<p><strong>Heads up!</strong> Dropdowns are positioned only with CSS and may need some additional styles for exact alignment.</p>
</div>

<div class="bd-example" data-example-id="">
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    This dropdown's menu is right-aligned
  </button>
  <div class="dropdown-menu dropdown-menu-right">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    This dropdown's menu is right-aligned
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="menu-headers">Menu headers</h2>

<p>Add a header to label sections of actions in any dropdown menu.</p>

<div class="bd-example" data-example-id="">
<div class="dropdown-menu">
  <h6 class="dropdown-header">Dropdown header</h6>
  <a class="dropdown-item" href="#">Action</a>
  <a class="dropdown-item" href="#">Another action</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header"</span><span class="nt">&gt;</span>Dropdown header<span class="nt">&lt;/h6&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="menu-dividers">Menu dividers</h2>

<p>Separate groups of related menu items with a divider.</p>

<div class="bd-example" data-example-id="">
<div class="dropdown-menu">
  <a class="dropdown-item" href="#">Action</a>
  <a class="dropdown-item" href="#">Another action</a>
  <a class="dropdown-item" href="#">Something else here</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="disabled-menu-items">Disabled menu items</h2>

<p>Add <code class="highlighter-rouge">.disabled</code> to items in the dropdown to <strong>style them as disabled</strong>.</p>

<div class="bd-example" data-example-id="">
<div class="dropdown-menu">
  <a class="dropdown-item" href="#">Regular link</a>
  <a class="dropdown-item disabled" href="#">Disabled link</a>
  <a class="dropdown-item" href="#">Another link</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Regular link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="usage">Usage</h2>

<p>Via data attributes or JavaScript, the dropdown plugin toggles hidden content (dropdown menus) by toggling the <code class="highlighter-rouge">.open</code> class on the parent list item.</p>

<p>On mobile devices, opening a dropdown adds a <code class="highlighter-rouge">.dropdown-backdrop</code> as a tap area for closing dropdown menus when tapping outside the menu, a requirement for proper iOS support. <strong>This means that switching from an open dropdown menu to a different dropdown menu requires an extra tap on mobile.</strong></p>

<p>Note: The <code class="highlighter-rouge">data-toggle="dropdown"</code> attribute is relied on for closing dropdown menus at an application level, so itâs a good idea to always use it.</p>

<h3 id="via-data-attributes">Via data attributes</h3>

<p>Add <code class="highlighter-rouge">data-toggle="dropdown"</code> to a link or button to toggle a dropdown.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">id=</span><span class="s">"dLabel"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Dropdown trigger
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dLabel"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure><h3 id="via-javascript">Via JavaScript</h3>

<p>Call the dropdowns via JavaScript:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'.dropdown-toggle'</span><span class="p">).</span><span class="nx">dropdown</span><span class="p">()</span></code></pre></figure><div class="bd-callout bd-callout-info">
<h4 id="data-toggledropdown-still-required">
<code class="highlighter-rouge">data-toggle="dropdown"</code> still required</h4>

<p>Regardless of whether you call your dropdown via JavaScript or instead use the data-api, <code class="highlighter-rouge">data-toggle="dropdown"</code> is always required to be present on the dropdownâs trigger element.</p>
</div>

<h3 id="options">Options</h3>

<p><em>None.</em></p>

<h3 id="methods">Methods</h3>

<table>
<thead><tr>
<th>Method</th>
      <th>Description</th>
    </tr></thead>
<tbody><tr>
<td><code class="highlighter-rouge">$().dropdown('toggle')</code></td>
      <td>Toggles the dropdown menu of a given navbar or tabbed navigation.</td>
    </tr></tbody>
</table>
<h3 id="events">Events</h3>

<p>All dropdown events are fired at the <code class="highlighter-rouge">.dropdown-menu</code>âs parent element and have a <code class="highlighter-rouge">relatedTarget</code> property, whose value is the toggling anchor element.</p>

<table>
<thead><tr>
<th>Event</th>
      <th>Description</th>
    </tr></thead>
<tbody>
<tr>
<td><code class="highlighter-rouge">show.bs.dropdown</code></td>
      <td>This event fires immediately when the show instance method is called.</td>
    </tr>
<tr>
<td><code class="highlighter-rouge">shown.bs.dropdown</code></td>
      <td>This event is fired when the dropdown has been made visible to the user (will wait for CSS transitions, to complete).</td>
    </tr>
<tr>
<td><code class="highlighter-rouge">hide.bs.dropdown</code></td>
      <td>This event is fired immediately when the hide instance method has been called.</td>
    </tr>
<tr>
<td><code class="highlighter-rouge">hidden.bs.dropdown</code></td>
      <td>This event is fired when the dropdown has finished being hidden from the user (will wait for CSS transitions, to complete).</td>
    </tr>
</tbody>
</table>
<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myDropdown'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'show.bs.dropdown'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="c1">// do somethingâ¦</span>
<span class="p">})</span></code></pre></figure>
</div><div class=bd-content>
          <h1 class="bd-title" id="content">Forms</h1>
          <p>Bootstrap provides several form control styles, layout options, and custom components for creating a wide variety of forms.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li>
<a href="#form-controls" id="markdown-toc-form-controls">Form controls</a>    <ul>
<li><a href="#textual-inputs" id="markdown-toc-textual-inputs">Textual inputs</a></li>
    </ul>
</li>
  <li>
<a href="#form-layouts" id="markdown-toc-form-layouts">Form layouts</a>    <ul>
<li><a href="#form-groups" id="markdown-toc-form-groups">Form groups</a></li>
      <li>
<a href="#inline-forms" id="markdown-toc-inline-forms">Inline forms</a>        <ul>
<li><a href="#visible-labels" id="markdown-toc-visible-labels">Visible labels</a></li>
          <li><a href="#hidden-labels" id="markdown-toc-hidden-labels">Hidden labels</a></li>
        </ul>
</li>
      <li><a href="#using-the-grid" id="markdown-toc-using-the-grid">Using the Grid</a></li>
    </ul>
</li>
  <li>
<a href="#checkboxes-and-radios" id="markdown-toc-checkboxes-and-radios">Checkboxes and radios</a>    <ul>
<li><a href="#default-stacked" id="markdown-toc-default-stacked">Default (stacked)</a></li>
      <li><a href="#inline" id="markdown-toc-inline">Inline</a></li>
      <li><a href="#without-labels" id="markdown-toc-without-labels">Without labels</a></li>
    </ul>
</li>
  <li><a href="#static-controls" id="markdown-toc-static-controls">Static controls</a></li>
  <li><a href="#disabled-states" id="markdown-toc-disabled-states">Disabled states</a></li>
  <li><a href="#readonly-inputs" id="markdown-toc-readonly-inputs">Readonly inputs</a></li>
  <li><a href="#control-sizing" id="markdown-toc-control-sizing">Control sizing</a></li>
  <li><a href="#column-sizing" id="markdown-toc-column-sizing">Column sizing</a></li>
  <li>
<a href="#help-text" id="markdown-toc-help-text">Help text</a>    <ul>
<li><a href="#block-level" id="markdown-toc-block-level">Block level</a></li>
      <li><a href="#inline-1" id="markdown-toc-inline-1">Inline</a></li>
    </ul>
</li>
  <li><a href="#validation" id="markdown-toc-validation">Validation</a></li>
  <li>
<a href="#custom-forms" id="markdown-toc-custom-forms">Custom forms</a>    <ul>
<li>
<a href="#checkboxes-and-radios-1" id="markdown-toc-checkboxes-and-radios-1">Checkboxes and radios</a>        <ul>
<li><a href="#checkboxes" id="markdown-toc-checkboxes">Checkboxes</a></li>
          <li><a href="#radios" id="markdown-toc-radios">Radios</a></li>
          <li><a href="#disabled" id="markdown-toc-disabled">Disabled</a></li>
          <li><a href="#validation-states" id="markdown-toc-validation-states">Validation states</a></li>
          <li><a href="#stacked" id="markdown-toc-stacked">Stacked</a></li>
        </ul>
</li>
      <li><a href="#select-menu" id="markdown-toc-select-menu">Select menu</a></li>
      <li>
<a href="#file-browser" id="markdown-toc-file-browser">File browser</a>        <ul>
<li><a href="#translating-or-customizing-the-strings" id="markdown-toc-translating-or-customizing-the-strings">Translating or customizing the strings</a></li>
        </ul>
</li>
    </ul>
</li>
</ul>
<h2 id="form-controls">Form controls</h2>

<p>Bootstrapâs form controls expand on <a href="/content/reboot/#forms">our Rebooted form styles</a> with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices. The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.</p>

<p>Remember, since Bootstrap utilizes the HTML5 doctype, <strong>all inputs must have a <code class="highlighter-rouge">type</code> attribute</strong>.</p>

<div class="bd-example" data-example-id="">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
  <div class="form-group">
    <label for="exampleSelect1">Example select</label>
    <select class="form-control" id="exampleSelect1"><option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></select>
</div>
  <div class="form-group">
    <label for="exampleSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleSelect2"><option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option></select>
</div>
  <div class="form-group">
    <label for="exampleTextarea">Example textarea</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
</div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"><small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div>
  <fieldset class="form-group">
<legend>Radio buttons</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Option one is this and that—be sure to include why it's great
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Option two can be something else and selecting it will deselect option one
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
        Option three is disabled
      </label>
    </div>
  </fieldset>
<div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail1"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail1"</span> <span class="na">aria-describedby=</span><span class="s">"emailHelp"</span> <span class="na">placeholder=</span><span class="s">"Enter email"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;small</span> <span class="na">id=</span><span class="s">"emailHelp"</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>We'll never share your email with anyone else.<span class="nt">&lt;/small&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputPassword1"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword1"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleSelect1"</span><span class="nt">&gt;</span>Example select<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleSelect1"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleSelect2"</span><span class="nt">&gt;</span>Example multiple select<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;select</span> <span class="na">multiple</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleSelect2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleTextarea"</span><span class="nt">&gt;</span>Example textarea<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleTextarea"</span> <span class="na">rows=</span><span class="s">"3"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputFile"</span><span class="nt">&gt;</span>File input<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">class=</span><span class="s">"form-control-file"</span> <span class="na">id=</span><span class="s">"exampleInputFile"</span> <span class="na">aria-describedby=</span><span class="s">"fileHelp"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;small</span> <span class="na">id=</span><span class="s">"fileHelp"</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.<span class="nt">&lt;/small&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;fieldset</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;legend&gt;</span>Radio buttons<span class="nt">&lt;/legend&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
        Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
        Option two can be something else and selecting it will deselect option one
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check disabled"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
        Option three is disabled
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/fieldset&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"form-check-input"</span><span class="nt">&gt;</span>
      Check me out
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<p>Below is a complete list of the specific form controls supported by Bootstrap and the classes that customize them. Additional documentation is available for each group.</p>

<table>
<thead><tr>
<th>Classes</th>
      <th>Used for</th>
      <th>Supported variations</th>
    </tr></thead>
<tbody>
<tr>
<td>
        <p><code class="highlighter-rouge">.form-group</code></p>

      </td>
      <td class="text-nowrap">
        Any group of form controls
      </td>
      <td>
        <p>Use with any block-level element like <code class="highlighter-rouge">&lt;fieldset&gt;</code> or <code class="highlighter-rouge">&lt;div&gt;</code></p>

      </td>
    </tr>
<tr>
<td rowspan="3">
        <p><code class="highlighter-rouge">.form-control</code></p>

      </td>
      <td>
        Textual inputs
      </td>
      <td>
        <p><code class="highlighter-rouge">text</code>, <code class="highlighter-rouge">password</code>, <code class="highlighter-rouge">datetime-local</code>, <code class="highlighter-rouge">date</code>, <code class="highlighter-rouge">month</code>, <code class="highlighter-rouge">time</code>, <code class="highlighter-rouge">week</code>, <code class="highlighter-rouge">number</code>, <code class="highlighter-rouge">email</code>, <code class="highlighter-rouge">url</code>, <code class="highlighter-rouge">search</code>, <code class="highlighter-rouge">tel</code>, <code class="highlighter-rouge">color</code></p>

      </td>
    </tr>
<tr>
<td>
        Select menus
      </td>
      <td>
        <p><code class="highlighter-rouge">multiple</code>, <code class="highlighter-rouge">size</code></p>

      </td>
    </tr>
<tr>
<td>
        Textareas
      </td>
      <td>
        <span class="text-muted">N/A</span>
      </td>
    </tr>
<tr>
<td class="text-nowrap">
        <p><code class="highlighter-rouge">.form-control-file</code></p>

      </td>
      <td>
        File inputs
      </td>
      <td>
        <p><code class="highlighter-rouge">file</code></p>

      </td>
    </tr>
<tr>
<td class="text-nowrap">

<p><code class="highlighter-rouge">.form-check</code><br><code class="highlighter-rouge">.form-check-inline</code></p>

      </td>
      <td class="text-nowrap">
        Checkboxes and radios
      </td>
      <td>
        <span class="text-muted">N/A</span>
      </td>
    </tr>
</tbody>
</table>
<h3 id="textual-inputs">Textual inputs</h3>

<p>Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>

<div class="bd-example" data-example-id="">
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Text</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
</div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">Search</label>
  <div class="col-xs-10">
    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
</div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-xs-2 col-form-label">Email</label>
  <div class="col-xs-10">
    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
</div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-xs-2 col-form-label">URL</label>
  <div class="col-xs-10">
    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
</div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
  <div class="col-xs-10">
    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
</div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
  <div class="col-xs-10">
    <input class="form-control" type="password" value="hunter2" id="example-password-input">
</div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-xs-2 col-form-label">Number</label>
  <div class="col-xs-10">
    <input class="form-control" type="number" value="42" id="example-number-input">
</div>
</div>
<div class="form-group row">
  <label for="example-datetime-local-input" class="col-xs-2 col-form-label">Date and time</label>
  <div class="col-xs-10">
    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
</div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-xs-2 col-form-label">Date</label>
  <div class="col-xs-10">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
</div>
</div>
<div class="form-group row">
  <label for="example-month-input" class="col-xs-2 col-form-label">Month</label>
  <div class="col-xs-10">
    <input class="form-control" type="month" value="2011-08" id="example-month-input">
</div>
</div>
<div class="form-group row">
  <label for="example-week-input" class="col-xs-2 col-form-label">Week</label>
  <div class="col-xs-10">
    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
</div>
</div>
<div class="form-group row">
  <label for="example-time-input" class="col-xs-2 col-form-label">Time</label>
  <div class="col-xs-10">
    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
</div>
</div>
<div class="form-group row">
  <label for="example-color-input" class="col-xs-2 col-form-label">Color</label>
  <div class="col-xs-10">
    <input class="form-control" type="color" value="#563d7c" id="example-color-input">
</div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-text-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Text<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">value=</span><span class="s">"Artisanal kale"</span> <span class="na">id=</span><span class="s">"example-text-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-search-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"search"</span> <span class="na">value=</span><span class="s">"How do I shoot web"</span> <span class="na">id=</span><span class="s">"example-search-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-email-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">value=</span><span class="s">"bootstrap@example.com"</span> <span class="na">id=</span><span class="s">"example-email-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-url-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>URL<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"url"</span> <span class="na">value=</span><span class="s">"https://getbootstrap.com"</span> <span class="na">id=</span><span class="s">"example-url-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-tel-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Telephone<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"tel"</span> <span class="na">value=</span><span class="s">"1-(555)-555-5555"</span> <span class="na">id=</span><span class="s">"example-tel-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-password-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">value=</span><span class="s">"hunter2"</span> <span class="na">id=</span><span class="s">"example-password-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-number-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Number<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"number"</span> <span class="na">value=</span><span class="s">"42"</span> <span class="na">id=</span><span class="s">"example-number-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-datetime-local-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Date and time<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"datetime-local"</span> <span class="na">value=</span><span class="s">"2011-08-19T13:45:00"</span> <span class="na">id=</span><span class="s">"example-datetime-local-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-date-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Date<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"date"</span> <span class="na">value=</span><span class="s">"2011-08-19"</span> <span class="na">id=</span><span class="s">"example-date-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-month-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Month<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"month"</span> <span class="na">value=</span><span class="s">"2011-08"</span> <span class="na">id=</span><span class="s">"example-month-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-week-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Week<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"week"</span> <span class="na">value=</span><span class="s">"2011-W33"</span> <span class="na">id=</span><span class="s">"example-week-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-time-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Time<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"time"</span> <span class="na">value=</span><span class="s">"13:45:00"</span> <span class="na">id=</span><span class="s">"example-time-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-color-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Color<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"color"</span> <span class="na">value=</span><span class="s">"#563d7c"</span> <span class="na">id=</span><span class="s">"example-color-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="form-layouts">Form layouts</h2>

<p>Since Bootstrap applies <code class="highlighter-rouge">display: block</code> and <code class="highlighter-rouge">width: 100%</code> to almost all our form controls, forms will by default stack vertically. Additional classes can be used to vary this layout on a per-form basis.</p>

<h3 id="form-groups">Form groups</h3>

<p>The <code class="highlighter-rouge">.form-group</code> class is the easiest way to add some structure to forms. Its only purpose is to provide <code class="highlighter-rouge">margin-bottom</code> around a label and control pairing. As a bonus, since itâs a class you can use it with <code class="highlighter-rouge">&lt;fieldset&gt;</code>s, <code class="highlighter-rouge">&lt;div&gt;</code>s, or nearly any other element.</p>

<div class="bd-example" data-example-id="">
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Example label</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
</div>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"formGroupExampleInput"</span><span class="nt">&gt;</span>Example label<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"formGroupExampleInput"</span> <span class="na">placeholder=</span><span class="s">"Example input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"formGroupExampleInput2"</span><span class="nt">&gt;</span>Another label<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"formGroupExampleInput2"</span> <span class="na">placeholder=</span><span class="s">"Another input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h3 id="inline-forms">Inline forms</h3>

<p>Use the <code class="highlighter-rouge">.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row. Form controls within inline forms behave differently:</p>

<ul>
<li>Controls are <code class="highlighter-rouge">display: inline-block</code> to provide alignment control via <code class="highlighter-rouge">vertical-align</code> and <code class="highlighter-rouge">margin</code>.</li>
  <li>Controls receive <code class="highlighter-rouge">width: auto</code> to override the Bootstrap default <code class="highlighter-rouge">width: 100%</code>.</li>
  <li>Controls <strong>only appear inline in viewports that are at least 768px wide</strong> to account for narrow viewports on mobile devices.</li>
</ul>
<p>Because of this, you may need to manually address the width and alignment of individual form controls. Lastly, as shown below, you should always include a <code class="highlighter-rouge">&lt;label&gt;</code> with each form control.</p>

<h4 id="visible-labels">Visible labels</h4>

<div class="bd-example" data-example-id="">
<form class="form-inline">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
</div>
  <div class="form-group">
    <label for="exampleInputEmail2">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
</div>
  <button type="submit" class="btn btn-primary">Send invitation</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputName2"</span><span class="nt">&gt;</span>Name<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputName2"</span> <span class="na">placeholder=</span><span class="s">"Jane Doe"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail2"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail2"</span> <span class="na">placeholder=</span><span class="s">"jane.doe@example.com"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Send invitation<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h4 id="hidden-labels">Hidden labels</h4>

<div class="bd-example" data-example-id="">
<form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
</div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
</div>
  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputEmail3"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Enter email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputPassword3"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Remember me
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount"><div class="input-group-addon">.00</div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Transfer cash</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputAmount"</span><span class="nt">&gt;</span>Amount (in dollars)<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputAmount"</span> <span class="na">placeholder=</span><span class="s">"Amount"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Transfer cash<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="alternatives-to-hidden-labels">Alternatives to hidden labels</h4>
<p>Assistive technologies such as screen readers will have trouble with your forms if you donât include a label for every input. For these inline forms, you can hide the labels using the <code class="highlighter-rouge">.sr-only</code> class. There are further alternative methods of providing a label for assistive technologies, such as the <code class="highlighter-rouge">aria-label</code>, <code class="highlighter-rouge">aria-labelledby</code> or <code class="highlighter-rouge">title</code> attribute. If none of these are present, assistive technologies may resort to using the <code class="highlighter-rouge">placeholder</code> attribute, if present, but note that use of <code class="highlighter-rouge">placeholder</code> as a replacement for other labelling methods is not advised.</p>
</div>

<h3 id="using-the-grid">Using the Grid</h3>

<p>For more structured form layouts that are also responsive, you can utilize Bootstrapâs <a href="/layout/grid/#predefined-classes">predefined grid classes</a> or <a href="/layout/grid/#sass-mixins">mixins</a> to create horizontal forms. Add the <code class="highlighter-rouge">.row</code> class to form groups and use the <code class="highlighter-rouge">.col-*-*</code> classes to specify the width of your labels and controls.</p>

<p>Be sure to add <code class="highlighter-rouge">.col-form-label</code> to your <code class="highlighter-rouge">&lt;label&gt;</code>s as well so theyâre vertically centered with their associated form controls. For <code class="highlighter-rouge">&lt;legend&gt;</code> elements, you can use <code class="highlighter-rouge">.col-form-legend</code> to make them appear similar to regular <code class="highlighter-rouge">&lt;label&gt;</code> elements.</p>

<div class="bd-example" data-example-id="">
<div class="container">
  <form>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
</div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
</div>
    </div>
    <fieldset class="form-group row">
<legend class="col-form-legend col-sm-2">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            Option one is this and that—be sure to include why it's great
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            Option two can be something else and selecting it will deselect option one
          </label>
        </div>
        <div class="form-check disabled">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            Option three is disabled
          </label>
        </div>
      </div>
    </fieldset>
<div class="form-group row">
      <label class="col-sm-2">Checkbox</label>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Check me out
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </form>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputEmail3"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword3"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;fieldset</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;legend</span> <span class="na">class=</span><span class="s">"col-form-legend col-sm-2"</span><span class="nt">&gt;</span>Radios<span class="nt">&lt;/legend&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"gridRadios"</span> <span class="na">id=</span><span class="s">"gridRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
            Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"gridRadios"</span> <span class="na">id=</span><span class="s">"gridRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
            Option two can be something else and selecting it will deselect option one
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check disabled"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"gridRadios"</span> <span class="na">id=</span><span class="s">"gridRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
            Option three is disabled
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/fieldset&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2"</span><span class="nt">&gt;</span>Checkbox<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Check me out
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"offset-sm-2 col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Grid-based form layouts also support large and small inputs.</p>

<div class="bd-example" data-example-id="">
<div class="container">
  <form>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="you@example.com">
</div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-sm" id="smFormGroupInput" placeholder="you@example.com">
</div>
    </div>
  </form>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"lgFormGroupInput"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label col-form-label-lg"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control form-control-lg"</span> <span class="na">id=</span><span class="s">"lgFormGroupInput"</span> <span class="na">placeholder=</span><span class="s">"you@example.com"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"smFormGroupInput"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label col-form-label-sm"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control form-control-sm"</span> <span class="na">id=</span><span class="s">"smFormGroupInput"</span> <span class="na">placeholder=</span><span class="s">"you@example.com"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="checkboxes-and-radios">Checkboxes and radios</h2>

<p>Default checkboxes and radios are improved upon with the help of <code class="highlighter-rouge">.form-check</code>, <strong>a single class for both input types that improves the layout and behavior of their HTML elements</strong>. Checkboxes are for selecting one or several options in a list, while radios are for selecting one option from many.</p>

<p>Disabled checkboxes and radios are supported, but to provide a <code class="highlighter-rouge">not-allowed</code> cursor on hover of the parent <code class="highlighter-rouge">&lt;label&gt;</code>, youâll need to add the <code class="highlighter-rouge">.disabled</code> class to the parent <code class="highlighter-rouge">.form-check</code>. The disabled class will also lighten the text color to help indicate the inputâs state.</p>

<h3 id="default-stacked">Default (stacked)</h3>

<p>By default, any number of checkboxes and radios that are immediate sibling will be vertically stacked and appropriately spaced with <code class="highlighter-rouge">.form-check</code>.</p>

<div class="bd-example" data-example-id="">
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" value="">
    Option one is this and that—be sure to include why it's great
  </label>
</div>
<div class="form-check disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" value="" disabled>
    Option two is disabled
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Option two is disabled
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    Option one is this and that—be sure to include why it's great
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    Option two can be something else and selecting it will deselect option one
  </label>
</div>
<div class="form-check disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
    Option three is disabled
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios"</span> <span class="na">id=</span><span class="s">"exampleRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios"</span> <span class="na">id=</span><span class="s">"exampleRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
    Option two can be something else and selecting it will deselect option one
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios"</span> <span class="na">id=</span><span class="s">"exampleRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Option three is disabled
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="inline">Inline</h3>

<p>Groups of checkboxes or radios that appear on the same horizontal row are similar to their stacked counterparts, but require different HTML and a single class. To switch from stacked to inline, drop the surrounding <code class="highlighter-rouge">&lt;div&gt;</code>, add <code class="highlighter-rouge">.form-check-inline</code> to the <code class="highlighter-rouge">&lt;label&gt;</code>, and keep the <code class="highlighter-rouge">.form-check-input</code> on the <code class="highlighter-rouge">&lt;input&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<label class="form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> 1
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> 2
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> 3
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox3"</span> <span class="na">value=</span><span class="s">"option3"</span><span class="nt">&gt;</span> 3
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio3"</span> <span class="na">value=</span><span class="s">"option3"</span><span class="nt">&gt;</span> 3
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<h3 id="without-labels">Without labels</h3>

<p>Should you have no text within the <code class="highlighter-rouge">&lt;label&gt;</code>, the input is positioned as youâd expect. <strong>Currently only works on non-inline checkboxes and radios.</strong> Remember to still provide some form of label for assistive technologies (for instance, using <code class="highlighter-rouge">aria-label</code>).</p>

<div class="bd-example" data-example-id="">
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."></label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="..."></label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"blankCheckbox"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"blankRadio"</span> <span class="na">id=</span><span class="s">"blankRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="static-controls">Static controls</h2>

<p>When you need to place plain text next to a form label within a form, use the <code class="highlighter-rouge">.form-control-static</code> class on an element of your choice. Using an element like <code class="highlighter-rouge">&lt;p&gt;</code> with a default margin? Be sure to use a margin override (as shown below).</p>

<div class="bd-example" data-example-id="">
<form>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <p class="form-control-static mb-0">email@example.com</p>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
</div>
  </div>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"form-control-static mb-0"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<form class="form-inline">
  <div class="form-group">
    <label class="sr-only">Email</label>
    <p class="form-control-static">email@example.com</p>
  </div>
  <div class="form-group">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
</div>
  <button type="submit" class="btn btn-primary">Confirm identity</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"form-control-static"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword2"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword2"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Confirm identity<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h2 id="disabled-states">Disabled states</h2>

<p>Add the <code class="highlighter-rouge">disabled</code> boolean attribute on an input to prevent user interactions. Disabled inputs appear lighter and add a <code class="highlighter-rouge">not-allowed</code> cursor.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"disabledInput"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled input here..."</span> <span class="na">disabled</span><span class="nt">&gt;</span></code></pre></figure><p>Add the <code class="highlighter-rouge">disabled</code> attribute to a <code class="highlighter-rouge">&lt;fieldset&gt;</code> to disable all the controls within.</p>

<div class="bd-example" data-example-id="">
<form>
  <fieldset disabled>
<div class="form-group">
      <label for="disabledTextInput">Disabled input</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
</div>
    <div class="form-group">
      <label for="disabledSelect">Disabled select menu</label>
      <select id="disabledSelect" class="form-control"><option>Disabled select</option></select>
</div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Can't check this
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;fieldset</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledTextInput"</span><span class="nt">&gt;</span>Disabled input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"disabledTextInput"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Disabled input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledSelect"</span><span class="nt">&gt;</span>Disabled select menu<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">"disabledSelect"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;option&gt;</span>Disabled select<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Can't check this
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/fieldset&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="caveat-about-link-functionality-of-a">Caveat about link functionality of <code class="highlighter-rouge">&lt;a&gt;</code>
</h4>

<p>By default, browsers will treat all native form controls (<code class="highlighter-rouge">&lt;input&gt;</code>, <code class="highlighter-rouge">&lt;select&gt;</code> and <code class="highlighter-rouge">&lt;button&gt;</code> elements) inside a <code class="highlighter-rouge">&lt;fieldset disabled&gt;</code> as disabled, preventing both keyboard and mouse interactions on them. However, if your form also includes <code class="highlighter-rouge">&lt;a ... class="btn btn-*"&gt;</code> elements, these will only be given a style of <code class="highlighter-rouge">pointer-events: none</code>. As noted in the section about <a href="/buttons/#disabled-state">disabled state for buttons</a> (and specifically in the sub-section for anchor elements), this CSS property is not yet standardized and isnât fully supported in Opera 18 and below, or in Internet Explorer 11, and wonât prevent keyboard users from being able to focus or activate these links. So to be safe, use custom JavaScript to disable such links.</p>
</div>

<div class="bd-callout bd-callout-danger">
<h4 id="cross-browser-compatibility">Cross-browser compatibility</h4>

<p>While Bootstrap will apply these styles in all browsers, Internet Explorer 11 and below donât fully support the <code class="highlighter-rouge">disabled</code> attribute on a <code class="highlighter-rouge">&lt;fieldset&gt;</code>. Use custom JavaScript to disable the fieldset in these browsers.</p>
</div>

<h2 id="readonly-inputs">Readonly inputs</h2>

<p>Add the <code class="highlighter-rouge">readonly</code> boolean attribute on an input to prevent modification of the inputâs value. Read-only inputs appear lighter (just like disabled inputs), but retain the standard cursor.</p>

<div class="bd-example" data-example-id="">
<input class="form-control" type="text" placeholder="Readonly input hereâ¦" readonly>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Readonly input hereâ¦"</span> <span class="na">readonly</span><span class="nt">&gt;</span></code></pre></div>

<h2 id="control-sizing">Control sizing</h2>

<p>Set heights using classes like <code class="highlighter-rouge">.form-control-lg</code>, and set widths using grid column classes like <code class="highlighter-rouge">.col-lg-*</code>.</p>

<div class="bd-example" data-example-id="">
<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"><input class="form-control" type="text" placeholder="Default input"><input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control form-control-lg"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".form-control-lg"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Default input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control form-control-sm"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".form-control-sm"</span><span class="nt">&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<select class="form-control form-control-lg"><option>Large select</option></select><select class="form-control"><option>Default select</option></select><select class="form-control form-control-sm"><option>Small select</option></select>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control form-control-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>Large select<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>Default select<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control form-control-sm"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>Small select<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></div>

<h2 id="column-sizing">Column sizing</h2>

<p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-xs-2">
    <input type="text" class="form-control" placeholder=".col-xs-2">
</div>
  <div class="col-xs-3">
    <input type="text" class="form-control" placeholder=".col-xs-3">
</div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder=".col-xs-4">
</div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-2"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="help-text">Help text</h2>

<p>Block-level help text in forms can be created using <code class="highlighter-rouge">.form-text</code> (previously known as <code class="highlighter-rouge">.help-block</code> in v3). Inline help text can be flexibly implemented using any inline HTML element and utility classes like <code class="highlighter-rouge">.text-muted</code>.</p>

<div class="bd-callout bd-callout-warning">
<h4 id="associating-help-text-with-form-controls">Associating help text with form controls</h4>

<p>Help text should be explicitly associated with the form control it relates to using the <code class="highlighter-rouge">aria-describedby</code> attribute. This will ensure that assistive technologies â such as screen readers â will announce this help text when the user focuses or enters the control.</p>
</div>

<h3 id="block-level">Block level</h3>

<p>Block help textâfor below inputs or for longer lines of help textâcan be easily achieved with <code class="highlighter-rouge">.form-text</code>. This class includes <code class="highlighter-rouge">display: block</code> and adds some top margin for easy spacing from the inputs above.</p>

<div class="bd-example" data-example-id="">
<label for="inputPassword5">Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"><p id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword5"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">id=</span><span class="s">"inputPassword5"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-describedby=</span><span class="s">"passwordHelpBlock"</span><span class="nt">&gt;</span>
<span class="nt">&lt;p</span> <span class="na">id=</span><span class="s">"passwordHelpBlock"</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
<span class="nt">&lt;/p&gt;</span></code></pre></div>

<h3 id="inline-1">Inline</h3>

<p>Inline text can use any typical inline HTML element (be it a <code class="highlighter-rouge">&lt;small&gt;</code>, <code class="highlighter-rouge">&lt;span&gt;</code>, or something else).</p>

<div class="bd-example" data-example-id="">
<form class="form-inline">
  <div class="form-group">
    <label for="inputPassword4">Password</label>
    <input type="password" id="inputPassword4" class="form-control" aria-describedby="passwordHelpInline"><small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long.
    </small>
  </div>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword4"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">id=</span><span class="s">"inputPassword4"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-describedby=</span><span class="s">"passwordHelpInline"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;small</span> <span class="na">id=</span><span class="s">"passwordHelpInline"</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>
      Must be 8-20 characters long.
    <span class="nt">&lt;/small&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h2 id="validation">Validation</h2>

<p>Bootstrap includes validation styles for danger, warning, and success states on form controls. Hereâs a rundown of how they work:</p>

<ul>
<li>To use, add <code class="highlighter-rouge">.has-warning</code>, <code class="highlighter-rouge">.has-danger</code>, or <code class="highlighter-rouge">.has-success</code> to the parent element. Any <code class="highlighter-rouge">.col-form-label</code>, <code class="highlighter-rouge">.form-control</code>, or custom form element will receive the validation styles.</li>
  <li>Contextual validation text, in addition to your usual form field help text, can be added with the use of <code class="highlighter-rouge">.form-control-feedback</code>. This text will adapt to the parent <code class="highlighter-rouge">.has-*</code> class. By default it only includes a bit of <code class="highlighter-rouge">margin</code> for spacing and a modified <code class="highlighter-rouge">color</code> for each state.</li>
  <li>Validation icons are <code class="highlighter-rouge">url()</code>s configured via Sass variables that are applied to <code class="highlighter-rouge">background-image</code> declarations for each state.</li>
  <li>You may use your own base64 PNGs or SVGs by updating the Sass variables and recompiling.</li>
  <li>Icons can also be disabled entirely by setting the variables to <code class="highlighter-rouge">none</code> or commenting out the source Sass.</li>
</ul>
<p>Generally speaking, youâll want to use a particular state for specific types of feedback:</p>

<ul>
<li>
<strong>Danger</strong> is great for when thereâs a blocking or required field. A user <em>must</em> fill in this field properly to submit the form.</li>
  <li>
<strong>Warning</strong> works well for input values that are in progress, like password strength, or soft validation before a user attempts to submit a form.</li>
  <li>And lastly, <strong>success</strong> is ideal for situations when you have per-field validation throughout a form and want to encourage a user through the rest of the fields.</li>
</ul>
<p>Here are some examples of the aforementioned classes in action.</p>

<div class="bd-example" data-example-id="">
<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">Input with success</label>
  <input type="text" class="form-control form-control-success" id="inputSuccess1"><div class="form-control-feedback">Success! You've done it.</div>
  <small class="form-text text-muted">Example help text that remains unchanged.</small>
</div>
<div class="form-group has-warning">
  <label class="form-control-label" for="inputWarning1">Input with warning</label>
  <input type="text" class="form-control form-control-warning" id="inputWarning1"><div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
  <small class="form-text text-muted">Example help text that remains unchanged.</small>
</div>
<div class="form-group has-danger">
  <label class="form-control-label" for="inputDanger1">Input with danger</label>
  <input type="text" class="form-control form-control-danger" id="inputDanger1"><div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
  <small class="form-text text-muted">Example help text that remains unchanged.</small>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess1"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control form-control-success"</span> <span class="na">id=</span><span class="s">"inputSuccess1"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-control-feedback"</span><span class="nt">&gt;</span>Success! You've done it.<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>Example help text that remains unchanged.<span class="nt">&lt;/small&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-control-label"</span> <span class="na">for=</span><span class="s">"inputWarning1"</span><span class="nt">&gt;</span>Input with warning<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control form-control-warning"</span> <span class="na">id=</span><span class="s">"inputWarning1"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-control-feedback"</span><span class="nt">&gt;</span>Shucks, check the formatting of that and try again.<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>Example help text that remains unchanged.<span class="nt">&lt;/small&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-danger"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-control-label"</span> <span class="na">for=</span><span class="s">"inputDanger1"</span><span class="nt">&gt;</span>Input with danger<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control form-control-danger"</span> <span class="na">id=</span><span class="s">"inputDanger1"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-control-feedback"</span><span class="nt">&gt;</span>Sorry, that username's taken. Try another?<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>Example help text that remains unchanged.<span class="nt">&lt;/small&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="form-check has-success">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" id="checkboxSuccess" value="option1">
    Checkbox with success
  </label>
</div>
<div class="form-check has-warning">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" id="checkboxWarning" value="option1">
    Checkbox with warning
  </label>
</div>
<div class="form-check has-danger">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" id="checkboxDanger" value="option1">
    Checkbox with danger
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check has-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">id=</span><span class="s">"checkboxSuccess"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
    Checkbox with success
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check has-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">id=</span><span class="s">"checkboxWarning"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
    Checkbox with warning
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check has-danger"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">id=</span><span class="s">"checkboxDanger"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
    Checkbox with danger
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="custom-forms">Custom forms</h2>

<p>For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. Theyâre built on top of semantic and accessible markup, so theyâre solid replacements for any default form control.</p>

<h3 id="checkboxes-and-radios-1">Checkboxes and radios</h3>

<p>Each checkbox and radio is wrapped in a <code class="highlighter-rouge">&lt;label&gt;</code> for three reasons:</p>

<ul>
<li>It provides a larger hit areas for checking the control.</li>
  <li>It provides a helpful and semantic wrapper to help us replace the default <code class="highlighter-rouge">&lt;input&gt;</code>s.</li>
  <li>It triggers the state of the <code class="highlighter-rouge">&lt;input&gt;</code> automatically, meaning no JavaScript is required.</li>
</ul>
<p>We hide the default <code class="highlighter-rouge">&lt;input&gt;</code> with <code class="highlighter-rouge">opacity</code> and use the <code class="highlighter-rouge">.custom-control-indicator</code> to build a new custom form indicator in its place. Unfortunately we canât build a custom one from just the <code class="highlighter-rouge">&lt;input&gt;</code> because CSSâs <code class="highlighter-rouge">content</code> doesnât work on that element.</p>

<p>We use the sibling selector (<code class="highlighter-rouge">~</code>) for all our <code class="highlighter-rouge">&lt;input&gt;</code> statesâlike <code class="highlighter-rouge">:checked</code>âto properly style our custom form indicator. When combined with the <code class="highlighter-rouge">.custom-control-description</code> class, we can also style the text for each item based on the <code class="highlighter-rouge">&lt;input&gt;</code>âs state.</p>

<p>In the checked states, we use <strong>base64 embedded SVG icons</strong> from <a href="https://useiconic.com/open">Open Iconic</a>. This provides us the best control for styling and positioning across browsers and devices.</p>

<h4 id="checkboxes">Checkboxes</h4>

<div class="bd-example" data-example-id="">
<label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span>
  <span class="custom-control-description">Check this custom checkbox</span>
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Check this custom checkbox<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<p>Custom checkboxes can also utilize the <code class="highlighter-rouge">:indeterminate</code> pseudo class when manually set via JavaScript (there is no available HTML attribute for specifying it).</p>

<div class="bd-example bd-example-indeterminate">
  <label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span>
    <span class="custom-control-description">Check this custom checkbox</span>
  </label>
</div>

<p>If youâre using jQuery, something like this should suffice:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'.your-checkbox'</span><span class="p">).</span><span class="nx">prop</span><span class="p">(</span><span class="s1">'indeterminate'</span><span class="p">,</span> <span class="kc">true</span><span class="p">)</span></code></pre></figure><h4 id="radios">Radios</h4>

<div class="bd-example" data-example-id="">
<label class="custom-control custom-radio">
  <input id="radio1" name="radio" type="radio" class="custom-control-input"><span class="custom-control-indicator"></span>
  <span class="custom-control-description">Toggle this custom radio</span>
</label>
<label class="custom-control custom-radio">
  <input id="radio2" name="radio" type="radio" class="custom-control-input"><span class="custom-control-indicator"></span>
  <span class="custom-control-description">Or toggle this other custom radio</span>
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">id=</span><span class="s">"radio1"</span> <span class="na">name=</span><span class="s">"radio"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Toggle this custom radio<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">id=</span><span class="s">"radio2"</span> <span class="na">name=</span><span class="s">"radio"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Or toggle this other custom radio<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<h4 id="disabled">Disabled</h4>

<p>Custom checkboxes and radios can also be disabled. Add the <code class="highlighter-rouge">disabled</code> boolean attribute to the <code class="highlighter-rouge">&lt;input&gt;</code> and the custom indicator and label description will be automatically styled.</p>

<div class="bd-example" data-example-id="">
<label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" disabled><span class="custom-control-indicator"></span>
  <span class="custom-control-description">Check this custom checkbox</span>
</label>

<label class="custom-control custom-radio">
  <input id="radio3" name="radioDisabled" type="radio" class="custom-control-input" disabled><span class="custom-control-indicator"></span>
  <span class="custom-control-description">Toggle this custom radio</span>
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Check this custom checkbox<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span>

<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">id=</span><span class="s">"radio3"</span> <span class="na">name=</span><span class="s">"radioDisabled"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Toggle this custom radio<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<h4 id="validation-states">Validation states</h4>

<p>Add other states to your custom forms with our validation classes.</p>

<div class="bd-example" data-example-id="">
<div class="form-group has-success">
  <label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span>
    <span class="custom-control-description">Check this custom checkbox</span>
  </label>
</div>
<div class="form-group has-warning">
  <label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span>
    <span class="custom-control-description">Check this custom checkbox</span>
  </label>
</div>
<div class="form-group has-danger mb-0">
  <label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span>
    <span class="custom-control-description">Check this custom checkbox</span>
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Check this custom checkbox<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Check this custom checkbox<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-danger mb-0"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Check this custom checkbox<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h4 id="stacked">Stacked</h4>

<p>Custom checkboxes and radios are inline to start. Add a parent with class <code class="highlighter-rouge">.custom-controls-stacked</code> to ensure each form control is on separate lines.</p>

<div class="bd-example" data-example-id="">
<div class="custom-controls-stacked">
  <label class="custom-control custom-radio">
    <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input"><span class="custom-control-indicator"></span>
    <span class="custom-control-description">Toggle this custom radio</span>
  </label>
  <label class="custom-control custom-radio">
    <input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input"><span class="custom-control-indicator"></span>
    <span class="custom-control-description">Or toggle this other custom radio</span>
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"custom-controls-stacked"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">id=</span><span class="s">"radioStacked1"</span> <span class="na">name=</span><span class="s">"radio-stacked"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Toggle this custom radio<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">id=</span><span class="s">"radioStacked2"</span> <span class="na">name=</span><span class="s">"radio-stacked"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Or toggle this other custom radio<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="select-menu">Select menu</h3>

<p>Custom <code class="highlighter-rouge">&lt;select&gt;</code> menus need only a custom class, <code class="highlighter-rouge">.custom-select</code> to trigger the custom styles.</p>

<div class="bd-example" data-example-id="">
<select class="custom-select"><option selected>Open this select menu</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option></select>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"custom-select"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">selected</span><span class="nt">&gt;</span>Open this select menu<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"1"</span><span class="nt">&gt;</span>One<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"2"</span><span class="nt">&gt;</span>Two<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"3"</span><span class="nt">&gt;</span>Three<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></div>

<p>Custom selects degrade nicely in IE9, receiving only a handful of overrides to remove the custom <code class="highlighter-rouge">background-image</code>. <strong>Multiple selects (e.g., <code class="highlighter-rouge">&lt;select multiple&gt;</code>) are not currently supported.</strong></p>

<h3 id="file-browser">File browser</h3>

<p>The file input is the most gnarly of the bunch and require additional JavaScript if youâd like to hook them up with functional <em>Choose fileâ¦</em> and selected file name text.</p>

<div class="bd-example" data-example-id="">
<label class="custom-file">
  <input type="file" id="file" class="custom-file-input"><span class="custom-file-control"></span>
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-file"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">id=</span><span class="s">"file"</span> <span class="na">class=</span><span class="s">"custom-file-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-file-control"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<p>Hereâs how it works:</p>

<ul>
<li>We wrap the <code class="highlighter-rouge">&lt;input&gt;</code> in a <code class="highlighter-rouge">&lt;label&gt;</code> so the custom control properly triggers the file browser.</li>
  <li>We hide the default file <code class="highlighter-rouge">&lt;input&gt;</code> via <code class="highlighter-rouge">opacity</code>.</li>
  <li>We use <code class="highlighter-rouge">:after</code> to generate a custom background and directive (<em>Choose fileâ¦</em>).</li>
  <li>We use <code class="highlighter-rouge">:before</code> to generate and position the <em>Browse</em> button.</li>
  <li>We declare a <code class="highlighter-rouge">height</code> on the <code class="highlighter-rouge">&lt;input&gt;</code> for proper spacing for surrounding content.</li>
</ul>
<p>In other words, itâs an entirely custom element, all generated via CSS.</p>

<h4 id="translating-or-customizing-the-strings">Translating or customizing the strings</h4>

<p>The <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/:lang"><code class="highlighter-rouge">:lang()</code> pseudo-class</a> is used to allow for easy translation of the âBrowseâ and âChoose fileâ¦â text into other languages. Simply override or add entries to the <code class="highlighter-rouge">$custom-file-text</code> SCSS variable with the relevant <a href="https://en.wikipedia.org/wiki/IETF_language_tag">language tag</a> and localized strings. The English strings can be customized the same way. For example, hereâs how one might add a Spanish translation (Spanishâs language code is <code class="highlighter-rouge">es</code>):</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$custom-file-text</span><span class="p">:</span> <span class="p">(</span>
  <span class="n">placeholder</span><span class="o">:</span> <span class="p">(</span>
    <span class="n">en</span><span class="o">:</span> <span class="s2">"Choose file..."</span><span class="o">,</span>
    <span class="n">es</span><span class="o">:</span> <span class="s2">"Seleccionar archivo..."</span>
  <span class="p">)</span><span class="o">,</span>
  <span class="n">button-label</span><span class="o">:</span> <span class="p">(</span>
    <span class="n">en</span><span class="o">:</span> <span class="s2">"Browse"</span><span class="o">,</span>
    <span class="n">es</span><span class="o">:</span> <span class="s2">"Navegar"</span>
  <span class="p">)</span>
<span class="p">);</span></code></pre></figure><p>Youâll need to set the language of your document (or subtree thereof) correctly in order for the correct text to be shown. This can be done using <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/lang">the <code class="highlighter-rouge">lang</code> attribute</a> or the <a href="https://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.12"><code class="highlighter-rouge">Content-Language</code> HTTP header</a>, among other methods.</p>

        </div><div class=bd-content>
          <h1 class="bd-title" id="content">Input group</h1>
          <p>Easily extend form controls by adding text, buttons, or button groups on either side of textual <code class="highlighter-rouge">&lt;input&gt;</code>s.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#basic-example" id="markdown-toc-basic-example">Basic example</a></li>
  <li><a href="#sizing" id="markdown-toc-sizing">Sizing</a></li>
  <li><a href="#checkboxes-and-radio-addons" id="markdown-toc-checkboxes-and-radio-addons">Checkboxes and radio addons</a></li>
  <li><a href="#multiple-addons" id="markdown-toc-multiple-addons">Multiple addons</a></li>
  <li><a href="#button-addons" id="markdown-toc-button-addons">Button addons</a></li>
  <li><a href="#buttons-with-dropdowns" id="markdown-toc-buttons-with-dropdowns">Buttons with dropdowns</a></li>
  <li><a href="#segmented-buttons" id="markdown-toc-segmented-buttons">Segmented buttons</a></li>
  <li><a href="#accessibility" id="markdown-toc-accessibility">Accessibility</a></li>
</ul>
<h2 id="basic-example">Basic example</h2>

<p>Place one add-on or button on either side of an input. You may also place one on both sides of an input. <strong>We do not support multiple form-controls in a single input group.</strong></p>

<div class="bd-example" data-example-id="">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>
<br><div class="input-group">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2"><span class="input-group-addon" id="basic-addon2">@example.com</span>
</div>
<br><label for="basic-url">Your vanity URL</label>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>
<br><div class="input-group">
  <span class="input-group-addon">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"><span class="input-group-addon">.00</span>
</div>
<br><div class="input-group">
  <span class="input-group-addon">$</span>
  <span class="input-group-addon">0.00</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span> <span class="na">id=</span><span class="s">"basic-addon1"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span> <span class="na">aria-describedby=</span><span class="s">"basic-addon1"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Recipient's username"</span> <span class="na">aria-describedby=</span><span class="s">"basic-addon2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span> <span class="na">id=</span><span class="s">"basic-addon2"</span><span class="nt">&gt;</span>@example.com<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"basic-url"</span><span class="nt">&gt;</span>Your vanity URL<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span> <span class="na">id=</span><span class="s">"basic-addon3"</span><span class="nt">&gt;</span>https://example.com/users/<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"basic-url"</span> <span class="na">aria-describedby=</span><span class="s">"basic-addon3"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Amount (to the nearest dollar)"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>0.00<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Amount (to the nearest dollar)"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="sizing">Sizing</h2>

<p>Add the relative form sizing classes to the <code class="highlighter-rouge">.input-group</code> itself and contents within will automatically resizeâno need for repeating the form control size classes on each element.</p>

<div class="bd-example" data-example-id="">
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
</div>
<br><div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span> <span class="na">id=</span><span class="s">"sizing-addon1"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span> <span class="na">aria-describedby=</span><span class="s">"sizing-addon1"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span> <span class="na">id=</span><span class="s">"sizing-addon2"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span> <span class="na">aria-describedby=</span><span class="s">"sizing-addon2"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="checkboxes-and-radio-addons">Checkboxes and radio addons</h2>

<p>Place any checkbox or radio option within an input groupâs addon instead of text.</p>

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" aria-label="Checkbox for following text input"></span>
      <input type="text" class="form-control" aria-label="Text input with checkbox">
</div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" aria-label="Radio button for following text input"></span>
      <input type="text" class="form-control" aria-label="Text input with radio button">
</div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">aria-label=</span><span class="s">"Checkbox for following text input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Text input with checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">aria-label=</span><span class="s">"Radio button for following text input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Text input with radio button"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="multiple-addons">Multiple addons</h2>

<p>Multiple add-ons are supported and can be mixed with checkbox and radio input versions.</p>

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" aria-label="Checkbox for following text input"></span>
      <span class="input-group-addon">$</span>
      <input type="text" class="form-control" aria-label="Text input with checkbox">
</div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-addon">$</span>
      <span class="input-group-addon">0.00</span>
      <input type="text" class="form-control" aria-label="Text input with radio button">
</div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">aria-label=</span><span class="s">"Checkbox for following text input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Text input with checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>0.00<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Text input with radio button"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="button-addons">Button addons</h2>

<p>Buttons in input groups are a bit different and require one extra level of nesting. Instead of <code class="highlighter-rouge">.input-group-addon</code>, youâll need to use <code class="highlighter-rouge">.input-group-btn</code> to wrap the buttons. This is required due to default browser styles that cannot be overridden.</p>

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Go!</button>
      </span>
      <input type="text" class="form-control" placeholder="Search for...">
</div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..."><span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>
<br><div class="row">
  <div class="col-lg-offset-3 col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Hate it</button>
      </span>
      <input type="text" class="form-control" placeholder="Product name"><span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Love it</button>
      </span>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search for..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search for..."</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-offset-3 col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Hate it<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Product name"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Love it<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="buttons-with-dropdowns">Buttons with dropdowns</h2>

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <div class="input-group-btn">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Action
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div role="separator" class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
      <input type="text" class="form-control" aria-label="Text input with dropdown button">
</div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" aria-label="Text input with dropdown button"><div class="input-group-btn">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Action
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div role="separator" class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
          Action
        <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">role=</span><span class="s">"separator"</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Text input with dropdown button"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Text input with dropdown button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
          Action
        <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">role=</span><span class="s">"separator"</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="segmented-buttons">Segmented buttons</h2>

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <div class="input-group-btn">
        <button type="button" class="btn btn-secondary">Action</button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div role="separator" class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
      <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
</div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" aria-label="Text input with segmented button dropdown"><div class="input-group-btn">
        <button type="button" class="btn btn-secondary">Action</button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div role="separator" class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle dropdown-toggle-split"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">role=</span><span class="s">"separator"</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Text input with segmented button dropdown"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Text input with segmented button dropdown"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle dropdown-toggle-split"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">role=</span><span class="s">"separator"</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="accessibility">Accessibility</h2>

<p>Screen readers will have trouble with your forms if you donât include a label for every input. For these input groups, ensure that any additional label or functionality is conveyed to assistive technologies.</p>

<p>The exact technique to be used (<code class="highlighter-rouge">&lt;label&gt;</code> elements hidden using the <code class="highlighter-rouge">.sr-only</code> class, or use of the <code class="highlighter-rouge">aria-label</code>, <code class="highlighter-rouge">aria-labelledby</code>, <code class="highlighter-rouge">aria-describedby</code>, <code class="highlighter-rouge">title</code> or <code class="highlighter-rouge">placeholder</code> attribute) and what additional information will need to be conveyed will vary depending on the exact type of interface widget youâre implementing. The examples in this section provide a few suggested, case-specific approaches.</p>

        </div><div class=bd-content>
          <h1 class="bd-title" id="content">Jumbotron</h1>
          <p>A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.</p>

<h2 id="example">Example</h2>

<div class="bd-example" data-example-id="">
<div class="jumbotron">
  <h1 class="display-3">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-2">
<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-3"</span><span class="nt">&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;hr</span> <span class="na">class=</span><span class="s">"my-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p&gt;</span>It uses utility classes for typography and spacing to space content out within the larger container.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Learn more<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>To make the jumbotron full width, and without rounded corners, add the <code class="highlighter-rouge">.jumbotron-fluid</code> modifier class and add a <code class="highlighter-rouge">.container</code> or <code class="highlighter-rouge">.container-fluid</code> within.</p>

<div class="bd-example" data-example-id="">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron jumbotron-fluid"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-3"</span><span class="nt">&gt;</span>Fluid jumbotron<span class="nt">&lt;/h1&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>This is a modified jumbotron that occupies the entire horizontal space of its parent.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>


        </div><div class=bd-content>
          <h1 class="bd-title" id="content">List group</h1>
          <p>List groups are a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#basic-example" id="markdown-toc-basic-example">Basic example</a></li>
  <li><a href="#tags" id="markdown-toc-tags">Tags</a></li>
  <li><a href="#disabled-items" id="markdown-toc-disabled-items">Disabled items</a></li>
  <li><a href="#anchors-and-buttons" id="markdown-toc-anchors-and-buttons">Anchors and buttons</a></li>
  <li><a href="#contextual-classes" id="markdown-toc-contextual-classes">Contextual classes</a></li>
  <li><a href="#custom-content" id="markdown-toc-custom-content">Custom content</a></li>
</ul>
<h2 id="basic-example">Basic example</h2>
<p>The most basic list group is simply an unordered list with list items, and the proper classes. Build upon it with the options that follow, or your own CSS as needed.</p>

<div class="bd-example" data-example-id="">
<ul class="list-group">
<li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="tags">Tags</h2>

<p>Add tags to any list group item to show unread counts, activity, etc.</p>

<div class="bd-example" data-example-id="">
<ul class="list-group">
<li class="list-group-item">
    <span class="tag tag-default tag-pill float-xs-right">14</span>
    Cras justo odio
  </li>
  <li class="list-group-item">
    <span class="tag tag-default tag-pill float-xs-right">2</span>
    Dapibus ac facilisis in
  </li>
  <li class="list-group-item">
    <span class="tag tag-default tag-pill float-xs-right">1</span>
    Morbi leo risus
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-default tag-pill float-xs-right"</span><span class="nt">&gt;</span>14<span class="nt">&lt;/span&gt;</span>
    Cras justo odio
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-default tag-pill float-xs-right"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/span&gt;</span>
    Dapibus ac facilisis in
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-default tag-pill float-xs-right"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/span&gt;</span>
    Morbi leo risus
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="disabled-items">Disabled items</h2>

<p>Add <code class="highlighter-rouge">.disabled</code> to a <code class="highlighter-rouge">.list-group-item</code> to gray it out to appear disabled.</p>

<div class="bd-example" data-example-id="">
<div class="list-group">
  <a href="#" class="list-group-item disabled">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item disabled"</span><span class="nt">&gt;</span>
    Cras justo odio
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="anchors-and-buttons">Anchors and buttons</h2>

<p>Use anchors or buttons to create actionable list group items with hover, disabled, and active states by adding <code class="highlighter-rouge">.list-group-item-action</code>. This separate class contains a few overrides to add compatibility for <code class="highlighter-rouge">&lt;a&gt;</code>s and <code class="highlighter-rouge">&lt;button&gt;</code>s, as well as the hover and focus states.</p>

<p>Be sure to <strong>not use the standard <code class="highlighter-rouge">.btn</code> classes here</strong>.</p>

<div class="bd-example" data-example-id="">
<div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>
    Cras justo odio
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action disabled"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active">
    Cras justo odio
  </button>
  <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
  <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
  <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
  <button type="button" class="list-group-item list-group-item-action disabled">Vestibulum at eros</button>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action active"</span><span class="nt">&gt;</span>
    Cras justo odio
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action disabled"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="contextual-classes">Contextual classes</h2>

<p>Use contextual classes to style list items, default or linked. Also includes <code class="highlighter-rouge">.active</code> state.</p>

<div class="bd-example" data-example-id="">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action list-group-item-success">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">Cras sit amet nibh libero</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Vestibulum at eros</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-success"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-info"</span><span class="nt">&gt;</span>Cras sit amet nibh libero<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-warning"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-danger"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h4>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies â such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h2 id="custom-content">Custom content</h2>

<p>Add nearly any HTML within, even for linked list groups like the one below.</p>

<div class="bd-example" data-example-id="">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    <h5 class="list-group-item-heading">List group item heading</h5>
    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
  </a>
  <a href="#" class="list-group-item list-group-item-action">
    <h5 class="list-group-item-heading">List group item heading</h5>
    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
  </a>
  <a href="#" class="list-group-item list-group-item-action">
    <h5 class="list-group-item-heading">List group item heading</h5>
    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
  </a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action active"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"list-group-item-heading"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h5&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"list-group-item-text"</span><span class="nt">&gt;</span>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"list-group-item-heading"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h5&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"list-group-item-text"</span><span class="nt">&gt;</span>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"list-group-item-heading"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h5&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"list-group-item-text"</span><span class="nt">&gt;</span>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>


        </div><div class=bd-content>
          <h1 class="bd-title" id="content">Modal</h1>
          <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li>
<a href="#contents" id="markdown-toc-contents">Contents</a>    <ul>
<li><a href="#static-example" id="markdown-toc-static-example">Static example</a></li>
      <li><a href="#live-demo" id="markdown-toc-live-demo">Live demo</a></li>
    </ul>
</li>
  <li><a href="#optional-sizes" id="markdown-toc-optional-sizes">Optional sizes</a></li>
  <li><a href="#remove-animation" id="markdown-toc-remove-animation">Remove animation</a></li>
  <li><a href="#using-the-grid-system" id="markdown-toc-using-the-grid-system">Using the grid system</a></li>
  <li><a href="#varying-modal-content-based-on-trigger-button" id="markdown-toc-varying-modal-content-based-on-trigger-button">Varying modal content based on trigger button</a></li>
  <li><a href="#modals-with-dynamic-heights" id="markdown-toc-modals-with-dynamic-heights">Modals with dynamic heights</a></li>
  <li>
<a href="#usage" id="markdown-toc-usage">Usage</a>    <ul>
<li><a href="#via-data-attributes" id="markdown-toc-via-data-attributes">Via data attributes</a></li>
      <li><a href="#via-javascript" id="markdown-toc-via-javascript">Via JavaScript</a></li>
      <li><a href="#options" id="markdown-toc-options">Options</a></li>
      <li>
<a href="#methods" id="markdown-toc-methods">Methods</a>        <ul>
<li><a href="#modaloptions" id="markdown-toc-modaloptions"><code class="highlighter-rouge">.modal(options)</code></a></li>
          <li><a href="#modaltoggle" id="markdown-toc-modaltoggle"><code class="highlighter-rouge">.modal('toggle')</code></a></li>
          <li><a href="#modalshow" id="markdown-toc-modalshow"><code class="highlighter-rouge">.modal('show')</code></a></li>
          <li><a href="#modalhide" id="markdown-toc-modalhide"><code class="highlighter-rouge">.modal('hide')</code></a></li>
        </ul>
</li>
      <li><a href="#events" id="markdown-toc-events">Events</a></li>
    </ul>
</li>
</ul>
<p><strong>Due to how HTML5 defines its semantics, <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-autofocus">the <code class="highlighter-rouge">autofocus</code> HTML attribute</a> has no effect in Bootstrap modals.</strong> To achieve the same effect, use some custom JavaScript:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'shown.bs.modal'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="nx">$</span><span class="p">(</span><span class="s1">'#myInput'</span><span class="p">).</span><span class="nx">focus</span><span class="p">()</span>
<span class="p">})</span></code></pre></figure><div class="bd-callout bd-callout-warning">
<h4 id="multiple-open-modals-not-supported">Multiple open modals not supported</h4>

<p>Be sure not to open a modal while another is still visible. Showing more than one modal at a time requires custom code.</p>
</div>

<div class="bd-callout bd-callout-warning">
<h4 id="modal-markup-placement">Modal markup placement</h4>

<p>Always try to place a modalâs HTML code in a top-level position in your document to avoid other components affecting the modalâs appearance and/or functionality.</p>
</div>

<div class="bd-callout bd-callout-warning">
<h4 id="mobile-device-caveats">Mobile device caveats</h4>

<p>There are some caveats regarding using modals on mobile devices. <a href="/getting-started/browsers-devices/#modals-and-dropdowns-on-mobile">See our browser support docs</a> for details.</p>
</div>

<h3 id="static-example">Static example</h3>

<p>A rendered modal with header, body, and set of actions in the footer.</p>

<div class="bd-example bd-example-modal">
  <div class="modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <p>One fine body…</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
<!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
  </div>
<!-- /.modal -->
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"modal-title"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>One fine body<span class="ni">&amp;hellip;</span><span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.modal-content --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.modal-dialog --&gt;</span>
<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.modal --&gt;</span></code></pre></figure><h3 id="live-demo">Live demo</h3>

<p>Toggle a modal via JavaScript by clicking the button below. It will slide down and fade in from the top of the page.</p>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <h4>Text in a modal</h4>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

        <h4>Popover in a modal</h4>
        <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">button</a> should trigger a popover on click.</p>

        <h4>Tooltips in a modal</h4>
        <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> should have tooltips on hover.</p>

        <hr>
<h4>Overflowing text to show scroll behavior</h4>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>

    </div>
<!-- /.modal-content -->
  </div>
<!-- /.modal-dialog -->
</div>

<div class="bd-example" style="padding-bottom: 24px;">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Launch demo modal
  </button>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Button trigger modal --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#myModal"</span><span class="nt">&gt;</span>
  Launch demo modal
<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Modal --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">id=</span><span class="s">"myModal"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"myModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"modal-title"</span> <span class="na">id=</span><span class="s">"myModalLabel"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
        ...
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure><div class="bd-callout bd-callout-warning">
<h4 id="make-modals-accessible">Make modals accessible</h4>

<p>Be sure to add <code class="highlighter-rouge">role="dialog"</code> and <code class="highlighter-rouge">aria-labelledby="..."</code>, referencing the modal title, to <code class="highlighter-rouge">.modal</code>, and <code class="highlighter-rouge">role="document"</code> to the <code class="highlighter-rouge">.modal-dialog</code> itself.</p>

<p>Additionally, you may give a description of your modal dialog with <code class="highlighter-rouge">aria-describedby</code> on <code class="highlighter-rouge">.modal</code>.</p>
</div>

<div class="bd-callout bd-callout-info">
<h4 id="embedding-youtube-videos">Embedding YouTube videos</h4>

<p>Embedding YouTube videos in modals requires additional JavaScript not in Bootstrap to automatically stop playback and more. <a href="https://stackoverflow.com/questions/18622508/bootstrap-3-and-youtube-in-modal">See this helpful Stack Overflow post</a> for more information.</p>
</div>

<h2 id="optional-sizes">Optional sizes</h2>

<p>Modals have two optional sizes, available via modifier classes to be placed on a <code class="highlighter-rouge">.modal-dialog</code>. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</p>

<div class="bd-example">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Large modal --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">".bd-example-modal-lg"</span><span class="nt">&gt;</span>Large modal<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade bd-example-modal-lg"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"myLargeModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-lg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      ...
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Small modal --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">".bd-example-modal-sm"</span><span class="nt">&gt;</span>Small modal<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade bd-example-modal-sm"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"mySmallModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-sm"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      ...
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure><div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>

<h2 id="remove-animation">Remove animation</h2>

<p>For modals that simply appear rather than fade in to view, remove the <code class="highlighter-rouge">.fade</code> class from your modal markup.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"..."</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></figure><h2 id="using-the-grid-system">Using the grid system</h2>

<p>To take advantage of the Bootstrap grid system within a modal, just nest <code class="highlighter-rouge">.container-fluid</code> within the <code class="highlighter-rouge">.modal-body</code> and then use the normal grid system classes within this container.</p>

<div class="bd-example" data-example-id="">
<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="gridModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          <div class="row">
            <div class="col-md-4">.col-md-4</div>
            <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
          </div>
          <div class="row">
            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
            <div class="col-md-2 col-md-offset-4">.col-md-2 .col-md-offset-4</div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
          </div>
          <div class="row">
            <div class="col-sm-9">
              Level 1: .col-sm-9
              <div class="row">
                <div class="col-xs-8 col-sm-6">
                  Level 2: .col-xs-8 .col-sm-6
                </div>
                <div class="col-xs-4 col-sm-6">
                  Level 2: .col-xs-4 .col-sm-6
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="bd-example bd-example-padded-bottom">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal">
    Launch demo modal
  </button>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"gridSystemModal"</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"gridModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;&lt;/button&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"modal-title"</span> <span class="na">id=</span><span class="s">"gridModalLabel"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid bd-example-row"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-md-offset-4"</span><span class="nt">&gt;</span>.col-md-4 .col-md-offset-4<span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-2 col-md-offset-4"</span><span class="nt">&gt;</span>.col-md-2 .col-md-offset-4<span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-6 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
              Level 1: .col-sm-9
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-8 col-sm-6"</span><span class="nt">&gt;</span>
                  Level 2: .col-xs-8 .col-sm-6
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4 col-sm-6"</span><span class="nt">&gt;</span>
                  Level 2: .col-xs-4 .col-sm-6
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bd-example bd-example-padded-bottom"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#gridSystemModal"</span><span class="nt">&gt;</span>
    Launch demo modal
  <span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="varying-modal-content-based-on-trigger-button">Varying modal content based on trigger button</h2>

<p>Have a bunch of buttons that all trigger the same modal, just with slightly different contents? Use <code class="highlighter-rouge">event.relatedTarget</code> and <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Using_data_attributes">HTML <code class="highlighter-rouge">data-*</code> attributes</a> (possibly <a href="https://api.jquery.com/data/">via jQuery</a>) to vary the contents of the modal depending on which button was clicked. See the Modal Events docs for details on <code class="highlighter-rouge">relatedTarget</code>.</p>

<div class="bd-example" data-example-id="">
<div class="bd-example">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">New message</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="form-control-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
</div>
            <div class="form-group">
              <label for="message-text" class="form-control-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
</div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bd-example"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#exampleModal"</span> <span class="na">data-whatever=</span><span class="s">"@mdo"</span><span class="nt">&gt;</span>Open modal for @mdo<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#exampleModal"</span> <span class="na">data-whatever=</span><span class="s">"@fat"</span><span class="nt">&gt;</span>Open modal for @fat<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#exampleModal"</span> <span class="na">data-whatever=</span><span class="s">"@getbootstrap"</span><span class="nt">&gt;</span>Open modal for @getbootstrap<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">id=</span><span class="s">"exampleModal"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"exampleModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
          <span class="nt">&lt;/button&gt;</span>
          <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"modal-title"</span> <span class="na">id=</span><span class="s">"exampleModalLabel"</span><span class="nt">&gt;</span>New message<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;form&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"recipient-name"</span> <span class="na">class=</span><span class="s">"form-control-label"</span><span class="nt">&gt;</span>Recipient:<span class="nt">&lt;/label&gt;</span>
              <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"recipient-name"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"message-text"</span> <span class="na">class=</span><span class="s">"form-control-label"</span><span class="nt">&gt;</span>Message:<span class="nt">&lt;/label&gt;</span>
              <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"message-text"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/form&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Send message<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#exampleModal'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'show.bs.modal'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">event</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">button</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="nx">event</span><span class="p">.</span><span class="nx">relatedTarget</span><span class="p">)</span> <span class="c1">// Button that triggered the modal</span>
  <span class="kd">var</span> <span class="nx">recipient</span> <span class="o">=</span> <span class="nx">button</span><span class="p">.</span><span class="nx">data</span><span class="p">(</span><span class="s1">'whatever'</span><span class="p">)</span> <span class="c1">// Extract info from data-* attributes</span>
  <span class="c1">// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).</span>
  <span class="c1">// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.</span>
  <span class="kd">var</span> <span class="nx">modal</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="k">this</span><span class="p">)</span>
  <span class="nx">modal</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">'.modal-title'</span><span class="p">).</span><span class="nx">text</span><span class="p">(</span><span class="s1">'New message to '</span> <span class="o">+</span> <span class="nx">recipient</span><span class="p">)</span>
  <span class="nx">modal</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">'.modal-body input'</span><span class="p">).</span><span class="nx">val</span><span class="p">(</span><span class="nx">recipient</span><span class="p">)</span>
<span class="p">})</span></code></pre></figure><h2 id="modals-with-dynamic-heights">Modals with dynamic heights</h2>

<p>If the height of a modal changes while it is open, you should call <code class="highlighter-rouge">$('#myModal').data('bs.modal').handleUpdate()</code> to readjust the modalâs position in case a scrollbar appears.</p>

<h2 id="usage">Usage</h2>

<p>The modal plugin toggles your hidden content on demand, via data attributes or JavaScript. It also adds <code class="highlighter-rouge">.modal-open</code> to the <code class="highlighter-rouge">&lt;body&gt;</code> to override default scrolling behavior and generates a <code class="highlighter-rouge">.modal-backdrop</code> to provide a click area for dismissing shown modals when clicking outside the modal.</p>

<h3 id="via-data-attributes">Via data attributes</h3>

<p>Activate a modal without writing JavaScript. Set <code class="highlighter-rouge">data-toggle="modal"</code> on a controller element, like a button, along with a <code class="highlighter-rouge">data-target="#foo"</code> or <code class="highlighter-rouge">href="#foo"</code> to target a specific modal to toggle.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#myModal"</span><span class="nt">&gt;</span>Launch modal<span class="nt">&lt;/button&gt;</span></code></pre></figure><h3 id="via-javascript">Via JavaScript</h3>

<p>Call a modal with id <code class="highlighter-rouge">myModal</code> with a single line of JavaScript:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">(</span><span class="nx">options</span><span class="p">)</span></code></pre></figure><h3 id="options">Options</h3>

<p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code class="highlighter-rouge">data-</code>, as in <code class="highlighter-rouge">data-backdrop=""</code>.</p>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
<thead><tr>
<th style="width: 100px;">Name</th>
       <th style="width: 50px;">Type</th>
       <th style="width: 50px;">Default</th>
       <th>Description</th>
     </tr></thead>
<tbody>
<tr>
<td>backdrop</td>
       <td>boolean or the string <code>'static'</code>
</td>
       <td>true</td>
       <td>Includes a modal-backdrop element. Alternatively, specify <code>static</code> for a backdrop which doesn't close the modal on click.</td>
     </tr>
<tr>
<td>keyboard</td>
       <td>boolean</td>
       <td>true</td>
       <td>Closes the modal when escape key is pressed</td>
     </tr>
<tr>
<td>focus</td>
       <td>boolean</td>
       <td>true</td>
       <td>Puts the focus on the modal when initialized.</td>
     </tr>
<tr>
<td>show</td>
       <td>boolean</td>
       <td>true</td>
       <td>Shows the modal when initialized.</td>
     </tr>
</tbody>
</table>
</div>

<h3 id="methods">Methods</h3>

<h4 id="modaloptions"><code class="highlighter-rouge">.modal(options)</code></h4>

<p>Activates your content as a modal. Accepts an optional options <code class="highlighter-rouge">object</code>.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">({</span>
  <span class="na">keyboard</span><span class="p">:</span> <span class="kc">false</span>
<span class="p">})</span></code></pre></figure><h4 id="modaltoggle"><code class="highlighter-rouge">.modal('toggle')</code></h4>

<p>Manually toggles a modal. <strong>Returns to the caller before the modal has actually been shown or hidden</strong> (i.e. before the <code class="highlighter-rouge">shown.bs.modal</code> or <code class="highlighter-rouge">hidden.bs.modal</code> event occurs).</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">(</span><span class="s1">'toggle'</span><span class="p">)</span></code></pre></figure><h4 id="modalshow"><code class="highlighter-rouge">.modal('show')</code></h4>

<p>Manually opens a modal. <strong>Returns to the caller before the modal has actually been shown</strong> (i.e. before the <code class="highlighter-rouge">shown.bs.modal</code> event occurs).</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span></code></pre></figure><h4 id="modalhide"><code class="highlighter-rouge">.modal('hide')</code></h4>

<p>Manually hides a modal. <strong>Returns to the caller before the modal has actually been hidden</strong> (i.e. before the <code class="highlighter-rouge">hidden.bs.modal</code> event occurs).</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">(</span><span class="s1">'hide'</span><span class="p">)</span></code></pre></figure><h3 id="events">Events</h3>

<p>Bootstrapâs modal class exposes a few events for hooking into modal functionality. All modal events are fired at the modal itself (i.e. at the <code class="highlighter-rouge">&lt;div class="modal"&gt;</code>).</p>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
<thead><tr>
<th style="width: 150px;">Event Type</th>
       <th>Description</th>
     </tr></thead>
<tbody>
<tr>
<td>show.bs.modal</td>
       <td>This event fires immediately when the <code>show</code> instance method is called. If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event.</td>
     </tr>
<tr>
<td>shown.bs.modal</td>
       <td>This event is fired when the modal has been made visible to the user (will wait for CSS transitions to complete). If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event.</td>
     </tr>
<tr>
<td>hide.bs.modal</td>
       <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
     </tr>
<tr>
<td>hidden.bs.modal</td>
       <td>This event is fired when the modal has finished being hidden from the user (will wait for CSS transitions to complete).</td>
     </tr>
</tbody>
</table>
</div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'hidden.bs.modal'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
  <span class="c1">// do something...</span>
<span class="p">})</span></code></pre></figure>
</div><div class=bd-content>
          <h1 class="bd-title" id="content">Navs</h1>
          <p>Navigation available in Bootstrap share general markup and styles, from the base <code class="highlighter-rouge">.nav</code> class to the active and disabled states. Swap modifier classes to switch between each style.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#regarding-accessibility" id="markdown-toc-regarding-accessibility">Regarding accessibility</a></li>
  <li><a href="#base-nav" id="markdown-toc-base-nav">Base nav</a></li>
  <li><a href="#inline" id="markdown-toc-inline">Inline</a></li>
  <li><a href="#tabs" id="markdown-toc-tabs">Tabs</a></li>
  <li>
<a href="#pills" id="markdown-toc-pills">Pills</a>    <ul>
<li><a href="#stacked-pills" id="markdown-toc-stacked-pills">Stacked pills</a></li>
    </ul>
</li>
  <li>
<a href="#using-dropdowns" id="markdown-toc-using-dropdowns">Using dropdowns</a>    <ul>
<li><a href="#tabs-with-dropdowns" id="markdown-toc-tabs-with-dropdowns">Tabs with dropdowns</a></li>
      <li><a href="#pills-with-dropdowns" id="markdown-toc-pills-with-dropdowns">Pills with dropdowns</a></li>
    </ul>
</li>
  <li>
<a href="#javascript-behavior" id="markdown-toc-javascript-behavior">JavaScript behavior</a>    <ul>
<li><a href="#using-data-attributes" id="markdown-toc-using-data-attributes">Using data attributes</a></li>
      <li><a href="#via-javascript" id="markdown-toc-via-javascript">Via JavaScript</a></li>
      <li><a href="#fade-effect" id="markdown-toc-fade-effect">Fade effect</a></li>
      <li>
<a href="#methods" id="markdown-toc-methods">Methods</a>        <ul>
<li><a href="#tab" id="markdown-toc-tab">$().tab</a></li>
          <li><a href="#tabshow" id="markdown-toc-tabshow">.tab(âshowâ)</a></li>
        </ul>
</li>
      <li><a href="#events" id="markdown-toc-events">Events</a></li>
    </ul>
</li>
</ul>
<h2 id="regarding-accessibility">Regarding accessibility</h2>

<p>If you are using navs to provide a navigation bar, be sure to add a <code class="highlighter-rouge">role="navigation"</code> to the most logical parent container of the <code class="highlighter-rouge">&lt;ul&gt;</code>, or wrap a <code class="highlighter-rouge">&lt;nav&gt;</code> element around the whole navigation. Do not add the role to the <code class="highlighter-rouge">&lt;ul&gt;</code> itself, as this would prevent it from being announced as an actual list by assistive technologies.</p>

<h2 id="base-nav">Base nav</h2>

<p>Roll your own navigation style by extending the base <code class="highlighter-rouge">.nav</code> component. All Bootstrapâs nav components are built on top of this by specifying additional styles. Includes styles for the disabled state, but <strong>not the active state</strong>.</p>

<div class="bd-example" data-example-id="">
<ul class="nav">
<li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<p>Classes are used throughout, so your markup can be super flexible. Use <code class="highlighter-rouge">&lt;ul&gt;</code>s like above, or roll your own with say a <code class="highlighter-rouge">&lt;nav&gt;</code> element. The change in nav item display below <strong>is intentional</strong> as <code class="highlighter-rouge">&lt;li&gt;</code>s have a different default <code class="highlighter-rouge">display</code> than regular <code class="highlighter-rouge">&lt;a&gt;</code> elements.</p>

<div class="bd-example" data-example-id="">
<nav class="nav"><a class="nav-link active" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"nav"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="inline">Inline</h2>

<p>Space out nav links in a horizontal band with <code class="highlighter-rouge">.nav-inline</code>. Longer series of links will wrap to a new line.</p>

<div class="bd-example" data-example-id="">
<nav class="nav nav-inline"><a class="nav-link active" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"nav nav-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>The same works for a navigation built with lists.</p>

<div class="bd-example" data-example-id="">
<ul class="nav nav-inline">
<li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="tabs">Tabs</h2>

<p>Takes the basic nav from above and adds the <code class="highlighter-rouge">.nav-tabs</code> class to generate a tabbed interface. Use them to create tabbable regions with our <a href="#javascript-behavior">tab JavaScript plugin</a>.</p>

<div class="bd-example" data-example-id="">
<ul class="nav nav-tabs">
<li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="pills">Pills</h2>

<p>Take that same HTML, but use <code class="highlighter-rouge">.nav-pills</code> instead:</p>

<div class="bd-example" data-example-id="">
<ul class="nav nav-pills">
<li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h3 id="stacked-pills">Stacked pills</h3>

<p>Add <code class="highlighter-rouge">.nav-stacked</code> to the <code class="highlighter-rouge">.nav.nav-pills</code> to stack them vertically. Each <code class="highlighter-rouge">.nav-link</code> becomes block-level, allowing for larger hit areas via mouse or tap.</p>

<div class="bd-example" data-example-id="">
<ul class="nav nav-pills nav-stacked">
<li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-stacked"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<p>As always, stacked pills are possible without <code class="highlighter-rouge">&lt;ul&gt;</code>s.</p>

<div class="bd-example" data-example-id="">
<nav class="nav nav-pills nav-stacked"><a class="nav-link active" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-stacked"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="using-dropdowns">Using dropdowns</h2>

<p>Add dropdown menus with a little extra HTML and the <a href="/components/dropdowns/#usage">dropdowns JavaScript plugin</a>.</p>

<h3 id="tabs-with-dropdowns">Tabs with dropdowns</h3>

<div class="bd-example" data-example-id="">
<ul class="nav nav-tabs">
<li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>Dropdown<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h3 id="pills-with-dropdowns">Pills with dropdowns</h3>

<div class="bd-example" data-example-id="">
<ul class="nav nav-pills">
<li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>Dropdown<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="javascript-behavior">JavaScript behavior</h2>

<p>Use the tab JavaScript pluginâinclude it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code> fileâto extend our navigational tabs and pills to create tabbable panes of local content, even via dropdown menus.</p>

<div class="bd-example bd-example-tabs" role="tabpanel">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Profile</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Dropdown
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role="tab" data-toggle="tab" aria-controls="dropdown1">@fat</a>
        <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a>
      </div>
    </li>
  </ul>
<div class="tab-content" id="myTabContent">
    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
    </div>
    <div class="tab-pane fade" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab">
      <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
    </div>
    <div class="tab-pane fade" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab">
      <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
    </div>
  </div>
</div>

<h3 id="using-data-attributes">Using data attributes</h3>

<p>You can activate a tab or pill navigation without writing any JavaScript by simply specifying <code class="highlighter-rouge">data-toggle="tab"</code> or <code class="highlighter-rouge">data-toggle="pill"</code> on an element. Use these data attributes on <code class="highlighter-rouge">.nav-tabs</code> or <code class="highlighter-rouge">.nav-pills</code>.</p>

<div role="tabpanel">

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Nav tabs --&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#home"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#profile"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#messages"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#settings"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Settings<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>

<span class="c">&lt;!-- Tab panes --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane active"</span> <span class="na">id=</span><span class="s">"home"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"profile"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"messages"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"settings"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>

<h3 id="via-javascript">Via JavaScript</h3>

<p>Enable tabbable tabs via JavaScript (each tab needs to be activated individually):</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myTab a'</span><span class="p">).</span><span class="nx">click</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
  <span class="nx">e</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">()</span>
  <span class="nx">$</span><span class="p">(</span><span class="k">this</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span>
<span class="p">})</span></code></pre></figure><p>You can activate individual tabs in several ways:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myTab a[href="#profile"]'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span> <span class="c1">// Select tab by name</span>
<span class="nx">$</span><span class="p">(</span><span class="s1">'#myTab a:first'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span> <span class="c1">// Select first tab</span>
<span class="nx">$</span><span class="p">(</span><span class="s1">'#myTab a:last'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span> <span class="c1">// Select last tab</span>
<span class="nx">$</span><span class="p">(</span><span class="s1">'#myTab li:eq(2) a'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span> <span class="c1">// Select third tab (0-indexed)</span></code></pre></figure><h3 id="fade-effect">Fade effect</h3>

<p>To make tabs fade in, add <code class="highlighter-rouge">.fade</code> to each <code class="highlighter-rouge">.tab-pane</code>. The first tab pane must also have <code class="highlighter-rouge">.in</code> to make the initial content visible.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade in active"</span> <span class="na">id=</span><span class="s">"home"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"profile"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"messages"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"settings"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure><h3 id="methods">Methods</h3>

<h4 id="tab">$().tab</h4>

<p>Activates a tab element and content container. Tab should have either a <code class="highlighter-rouge">data-target</code> or an <code class="highlighter-rouge">href</code> targeting a container node in the DOM.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span> <span class="na">id=</span><span class="s">"myTab"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#home"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"home"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#profile"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"profile"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#messages"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"messages"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#settings"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"settings"</span><span class="nt">&gt;</span>Settings<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane active"</span> <span class="na">id=</span><span class="s">"home"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"profile"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"messages"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"settings"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;script&gt;</span>
  <span class="nx">$</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
    <span class="nx">$</span><span class="p">(</span><span class="s1">'#myTab a:last'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span>
  <span class="p">})</span>
<span class="nt">&lt;/script&gt;</span></code></pre></figure><h4 id="tabshow">.tab(âshowâ)</h4>

<p>Selects the given tab and shows its associated pane. Any other tab that was previously selected becomes unselected and its associated pane is hidden. <strong>Returns to the caller before the tab pane has actually been shown</strong> (i.e. before the <code class="highlighter-rouge">shown.bs.tab</code> event occurs).</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#someTab'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span></code></pre></figure><h3 id="events">Events</h3>

<p>When showing a new tab, the events fire in the following order:</p>

<ol>
<li>
<code class="highlighter-rouge">hide.bs.tab</code> (on the current active tab)</li>
  <li>
<code class="highlighter-rouge">show.bs.tab</code> (on the to-be-shown tab)</li>
  <li>
<code class="highlighter-rouge">hidden.bs.tab</code> (on the previous active tab, the same one as for the <code class="highlighter-rouge">hide.bs.tab</code> event)</li>
  <li>
<code class="highlighter-rouge">shown.bs.tab</code> (on the newly-active just-shown tab, the same one as for the <code class="highlighter-rouge">show.bs.tab</code> event)</li>
</ol>
<p>If no tab was already active, then the <code class="highlighter-rouge">hide.bs.tab</code> and <code class="highlighter-rouge">hidden.bs.tab</code> events will not be fired.</p>

<table class="table table-bordered table-striped table-responsive">
<thead><tr>
<th style="width: 150px;">Event Type</th>
     <th>Description</th>
   </tr></thead>
<tbody>
<tr>
<td>show.bs.tab</td>
      <td>This event fires on tab show, but before the new tab has been shown. Use <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
   </tr>
<tr>
<td>shown.bs.tab</td>
      <td>This event fires on tab show after a tab has been shown. Use <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
    </tr>
<tr>
<td>hide.bs.tab</td>
      <td>This event fires when a new tab is to be shown (and thus the previous active tab is to be hidden). Use <code>event.target</code> and <code>event.relatedTarget</code> to target the current active tab and the new soon-to-be-active tab, respectively.</td>
    </tr>
<tr>
<td>hidden.bs.tab</td>
      <td>This event fires after a new tab is shown (and thus the previous active tab is hidden). Use <code>event.target</code> and <code>event.relatedTarget</code> to target the previous active tab and the new active tab, respectively.</td>
    </tr>
</tbody>
</table>
<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'a[data-toggle="tab"]'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'shown.bs.tab'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
  <span class="nx">e</span><span class="p">.</span><span class="nx">target</span> <span class="c1">// newly activated tab</span>
  <span class="nx">e</span><span class="p">.</span><span class="nx">relatedTarget</span> <span class="c1">// previous active tab</span>
<span class="p">})</span></code></pre></figure>
</div><div class=bd-content>
          <h1 class="bd-title" id="content">Navbar</h1>
          <p>The navbar is a wrapper that positions branding, navigation, and other elements into a concise header. Itâs easily extensible and thanks to our Collapse plugin, it can easily integrate responsive behaviors.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#basics" id="markdown-toc-basics">Basics</a></li>
  <li>
<a href="#supported-content" id="markdown-toc-supported-content">Supported content</a>    <ul>
<li><a href="#brand" id="markdown-toc-brand">Brand</a></li>
      <li><a href="#nav" id="markdown-toc-nav">Nav</a></li>
      <li><a href="#forms" id="markdown-toc-forms">Forms</a></li>
      <li><a href="#text" id="markdown-toc-text">Text</a></li>
    </ul>
</li>
  <li><a href="#color-schemes" id="markdown-toc-color-schemes">Color schemes</a></li>
  <li><a href="#containers" id="markdown-toc-containers">Containers</a></li>
  <li><a href="#placement" id="markdown-toc-placement">Placement</a></li>
  <li><a href="#collapsible-content" id="markdown-toc-collapsible-content">Collapsible content</a></li>
</ul>
<h2 id="basics">Basics</h2>

<p>Hereâs what you need to know before getting started with the navbar:</p>

<ul>
<li>Navbars require a wrapping <code class="highlighter-rouge">.navbar</code> and a <a href="#color-schemes">color scheme</a>.</li>
  <li>Navbars and their contents are fluid by default. Use <a href="#containers">optional containers</a> to limit their horizontal width.</li>
  <li>Use <code class="highlighter-rouge">.float-*-left</code> and <code class="highlighter-rouge">.float-*-right</code> to quickly align sub-components.</li>
  <li>Ensure accessibility by using a <code class="highlighter-rouge">&lt;nav&gt;</code> element or, if using a more generic element such as a <code class="highlighter-rouge">&lt;div&gt;</code>, add a <code class="highlighter-rouge">role="navigation"</code> to every navbar to explicitly identify it as a landmark region for users of assistive technologies.</li>
</ul>
<h2 id="supported-content">Supported content</h2>

<p>Navbars come with built-in support for a handful of sub-components. Mix and match from the following as needed:</p>

<ul>
<li>
<code class="highlighter-rouge">.navbar-brand</code> for your company, product, or project name</li>
  <li>
<code class="highlighter-rouge">.navbar-nav</code> for a full-height and lightweight navigation (including support for dropdowns)</li>
  <li>
<code class="highlighter-rouge">.navbar-toggler</code> for use with our collapse plugin and other <a href="#collapsible-content">navigation toggling</a> behaviors.</li>
  <li>Inline forms with <code class="highlighter-rouge">.float-</code> utilities for form controls and components.</li>
  <li>
<code class="highlighter-rouge">.navbar-text</code> for adding vertically centered strings of text.</li>
</ul>
<p>Hereâs an example of all the sub-components included in a default, non-responsive light themed navbar. <a href="#collapsible-content">See the responsive examples</a> for collapsing nav support.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav navbar-nav">
<li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="http://example.com" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
      <div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
  </ul>
<form class="form-inline float-xs-right">
    <input class="form-control" type="text" placeholder="Search"><button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav navbar-nav"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">href=</span><span class="s">"http://example.com"</span> <span class="na">id=</span><span class="s">"supportedContentDropdown"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>Dropdown<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"supportedContentDropdown"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline float-xs-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h3 id="brand">Brand</h3>

<p>The <code class="highlighter-rouge">.navbar-brand</code> can be applied to most elements, but an anchor works best as some elements might require utility classes or custom styles.</p>

<div class="bd-example" data-example-id="">
<!-- As a link -->
<nav class="navbar navbar-light bg-faded"><a class="navbar-brand" href="#">Navbar</a>
</nav><!-- As a heading --><nav class="navbar navbar-light bg-faded"><h1 class="navbar-brand mb-0">Navbar</h1>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- As a link --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="c">&lt;!-- As a heading --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"navbar-brand mb-0"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Adding images to the <code class="highlighter-rouge">.navbar-brand</code> will likely always require custom styles or utilities to properly size. Here are some examples to demonstrate.</p>

<div class="bd-example" data-example-id="">
<!-- Just an image -->
<nav class="navbar navbar-light bg-faded"><a class="navbar-brand" href="#">
    <img src="" width="30" height="30" alt=""></a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Just an image --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">""</span> <span class="na">width=</span><span class="s">"30"</span> <span class="na">height=</span><span class="s">"30"</span> <span class="na">alt=</span><span class="s">""</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<!-- Image and text -->
<nav class="navbar navbar-light bg-faded"><a class="navbar-brand" href="#">
    <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Image and text --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">""</span> <span class="na">width=</span><span class="s">"30"</span> <span class="na">height=</span><span class="s">"30"</span> <span class="na">class=</span><span class="s">"d-inline-block align-top"</span> <span class="na">alt=</span><span class="s">""</span><span class="nt">&gt;</span>
    Bootstrap
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h3 id="nav">Nav</h3>

<p>Navbar navigation is similar to our regular nav optionsâuse the <code class="highlighter-rouge">.nav</code> base class with a modifier to achieve a particular look. In this case youâll want <code class="highlighter-rouge">.nav.navbar-nav</code>.</p>

<p>Active statesâwith <code class="highlighter-rouge">.active</code>âto indicate the current page can be applied directly to <code class="highlighter-rouge">.nav-link</code>s or their immediate parent <code class="highlighter-rouge">.nav-item</code>s.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><ul class="nav navbar-nav">
<li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Features</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pricing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
  </ul></nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav navbar-nav"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>About<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>And because we use classes for our navs, you can avoid the list-based approach entirely if you like.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><div class="nav navbar-nav">
    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
    <a class="nav-item nav-link" href="#">Features</a>
    <a class="nav-item nav-link" href="#">Pricing</a>
    <a class="nav-item nav-link" href="#">About</a>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav navbar-nav"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>About<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>You may also utilize dropdowns in your navbar nav. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for <code class="highlighter-rouge">.nav-item</code> and <code class="highlighter-rouge">.nav-link</code> as shown below.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><ul class="nav navbar-nav">
<li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Features</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pricing</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown link
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
  </ul></nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav navbar-nav"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">href=</span><span class="s">"http://example.com"</span> <span class="na">id=</span><span class="s">"navbarDropdownMenuLink"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
        Dropdown link
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"navbarDropdownMenuLink"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h3 id="forms">Forms</h3>

<p>Place various form controls and components within a navbar with <code class="highlighter-rouge">.form-inline</code>. Align them with <code class="highlighter-rouge">.float-</code> utilities as needed.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><form class="form-inline float-xs-left">
    <input class="form-control" type="text" placeholder="Search"><button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline float-xs-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Input groups work, too:</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><form class="form-inline float-xs-left">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>
  </form>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline float-xs-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span> <span class="na">id=</span><span class="s">"basic-addon1"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span> <span class="na">aria-describedby=</span><span class="s">"basic-addon1"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Various buttons are supported as part of these navbar forms, too. This is also a great reminder that vertical alignment utilites can be used to align different sized elements.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><form class="form-inline float-xs-left">
    <button class="btn btn-outline-success" type="button">Main button</button>
    <button class="btn btn-sm align-middle btn-outline-secondary" type="button">Smaller button</button>
  </form>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline float-xs-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Main button<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-sm align-middle btn-outline-secondary"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Smaller button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h3 id="text">Text</h3>

<p>Navbars may contain bits of text with the help of <code class="highlighter-rouge">.navbar-text</code>. This class adjusts vertical alignment and horizontal spacing for strings of text.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><span class="navbar-text">
    Navbar text with an inline element
  </span>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-text"</span><span class="nt">&gt;</span>
    Navbar text with an inline element
  <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Using our utility classes, you can change the alignment and appearance of your navbar text.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><span class="navbar-text float-xs-right text-muted">
    Muted navbar text that's floated right
  </span>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-text float-xs-right text-muted"</span><span class="nt">&gt;</span>
    Muted navbar text that's floated right
  <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Similarly, you can use utility classes to align navbar text to other navbar elements like the brand and navigation (which are automatically floated already).</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><a class="navbar-brand" href="#">Navbar</a>
  <span class="navbar-text float-xs-left">
    Navbar text that's floated left
  </span>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-text float-xs-left"</span><span class="nt">&gt;</span>
    Navbar text that's floated left
  <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="color-schemes">Color schemes</h2>

<p>Theming the navbar has never been easier thanks to the combination of a simple link color modifier class and <code class="highlighter-rouge">background-color</code> utilities. Put another way, you specify light or dark and apply a background color.</p>

<p>Here are some examples to show what we mean.</p>

<div class="bd-example">
  <nav class="navbar navbar-dark bg-inverse"><a class="navbar-brand" href="#">Navbar</a>
    <ul class="nav navbar-nav">
<li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
<form class="form-inline float-xs-right">
      <input class="form-control" type="text" placeholder="Search"><button class="btn btn-outline-info" type="submit">Search</button>
    </form>
  </nav><nav class="navbar navbar-dark bg-primary"><a class="navbar-brand" href="#">Navbar</a>
    <ul class="nav navbar-nav">
<li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
<form class="form-inline float-xs-right">
      <input class="form-control" type="text" placeholder="Search"><button class="btn btn-outline-secondary" type="submit">Search</button>
    </form>
  </nav><nav class="navbar navbar-light" style="background-color: #e3f2fd;"><a class="navbar-brand" href="#">Navbar</a>
    <ul class="nav navbar-nav">
<li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
<form class="form-inline float-xs-right">
      <input class="form-control" type="text" placeholder="Search"><button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </nav>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-inverse"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-primary"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light"</span> <span class="na">style=</span><span class="s">"background-color: #e3f2fd;"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></figure><h2 id="containers">Containers</h2>

<p>Although itâs not required, you can wrap a navbar in a <code class="highlighter-rouge">.container</code> to center it on a page or add one within to only center the contents of a <a href="#placement">fixed or static top navbar</a>.</p>

<div class="bd-example" data-example-id="">
<div class="container">
  <nav class="navbar navbar-light bg-faded"><a class="navbar-brand" href="#">Navbar</a>
  </nav>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/nav&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="placement">Placement</h2>

<p>Navbars can be statically placed (their default behavior), static without rounded corners, or fixed to the top or bottom of the viewport.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-full navbar-light bg-faded"><a class="navbar-brand" href="#">Full width</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-full navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Full width<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-fixed-top navbar-light bg-faded"><a class="navbar-brand" href="#">Fixed top</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-fixed-top navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Fixed top<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-fixed-bottom navbar-light bg-faded"><a class="navbar-brand" href="#">Fixed bottom</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-fixed-bottom navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Fixed bottom<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="collapsible-content">Collapsible content</h2>

<p>Our collapse plugin allows you to use a <code class="highlighter-rouge">&lt;button&gt;</code> or <code class="highlighter-rouge">&lt;a&gt;</code> to toggle hidden content.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation"></button>
  <div class="collapse" id="exCollapsingNavbar">
    <div class="bg-inverse text-muted p-1">
      <h4>Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#exCollapsingNavbar"</span> <span class="na">aria-controls=</span><span class="s">"exCollapsingNavbar"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse"</span> <span class="na">id=</span><span class="s">"exCollapsingNavbar"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-inverse text-muted p-1"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4&gt;</span>Collapsed content<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Toggleable via the navbar brand.<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>For more complex navbar patterns, like those used in Bootstrap v3, use the <code class="highlighter-rouge">.navbar-toggleable-*</code> classes in conjunction with the <code class="highlighter-rouge">.navbar-toggler</code>. These classes override our responsive utilities to show navigation only when content is meant to be shown.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-faded"><button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
  <div class="collapse navbar-toggleable-md" id="navbarResponsive">
    <a class="navbar-brand" href="#">Navbar</a>
    <ul class="nav navbar-nav">
<li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
<form class="form-inline float-lg-right">
      <input class="form-control" type="text" placeholder="Search"><button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-faded"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler hidden-lg-up"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarResponsive"</span> <span class="na">aria-controls=</span><span class="s">"navbarResponsive"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-toggleable-md"</span> <span class="na">id=</span><span class="s">"navbarResponsive"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav navbar-nav"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">href=</span><span class="s">"http://example.com"</span> <span class="na">id=</span><span class="s">"responsiveNavbarDropdown"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>Dropdown<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"responsiveNavbarDropdown"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline float-lg-right"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/form&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>


        </div><div class=bd-content>
          <h1 class="bd-title" id="content">Pagination</h1>
          <p>Provide pagination links for your site or app with the multi-page pagination component.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#overview" id="markdown-toc-overview">Overview</a></li>
  <li><a href="#disabled-and-active-states" id="markdown-toc-disabled-and-active-states">Disabled and active states</a></li>
  <li><a href="#sizing" id="markdown-toc-sizing">Sizing</a></li>
</ul>
<h2 id="overview">Overview</h2>

<p>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>

<div class="bd-example" data-example-id="">
<nav aria-label="Page navigation"><ul class="pagination">
<li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">«</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">»</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul></nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"Page navigation"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>5<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Next"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-info">
<h3 id="labelling-the-pagination-component">Labelling the pagination component</h3>

<p>The pagination component should be wrapped in a <code class="highlighter-rouge">&lt;nav&gt;</code> element to identify it as a navigation section to screen readers and other assistive technologies. In addition, as a page is likely to have more than one such navigation section already (such as the primary navigation in the header, or a sidebar navigation), it is advisable to provide a descriptive <code class="highlighter-rouge">aria-label</code> for the <code class="highlighter-rouge">&lt;nav&gt;</code> which reflects its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be <code class="highlighter-rouge">aria-label="Search results pages"</code>.</p>
</div>

<h2 id="disabled-and-active-states">Disabled and active states</h2>

<p>Links are customizable for different circumstances. Use <code class="highlighter-rouge">.disabled</code> for unclickable links and <code class="highlighter-rouge">.active</code> to indicate the current page.</p>

<div class="bd-callout bd-callout-warning">
<h4 id="link-functionality-caveat">Link functionality caveat</h4>

<p>The <code class="highlighter-rouge">.disabled</code> class uses <code class="highlighter-rouge">pointer-events: none</code> to try to disable the link functionality of <code class="highlighter-rouge">&lt;a&gt;</code>s, but that CSS property is not yet standardized. In addition, even in browsers that do support <code class="highlighter-rouge">pointer-events: none</code>, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, add a <code class="highlighter-rouge">tabindex="-1"</code> attribute on these links (to prevent them from receiving keyboard focus) and use custom JavaScript to disable their functionality.</p>
</div>

<div class="bd-example" data-example-id="">
<nav aria-label="..."><ul class="pagination">
<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-label="Previous">
        <span aria-hidden="true">«</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">»</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul></nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item disabled"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>5<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Next"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>You can optionally swap out active or disabled anchors for <code class="highlighter-rouge">&lt;span&gt;</code>, or omit the anchor in the case of the prev/next arrows, to remove click functionality and prevent keyboard focus while retaining intended styles.</p>

<div class="bd-example" data-example-id="">
<nav aria-label="..."><ul class="pagination">
<li class="page-item disabled">
      <span class="page-link" aria-label="Previous">
        <span aria-hidden="true">«</span>
        <span class="sr-only">Previous</span>
      </span>
    </li>
    <li class="page-item active"><span class="page-link">1 <span class="sr-only">(current)</span></span></li>
  </ul></nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item disabled"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item active"</span><span class="nt">&gt;&lt;span</span> <span class="na">class=</span><span class="s">"page-link"</span><span class="nt">&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="sizing">Sizing</h2>

<p>Fancy larger or smaller pagination? Add <code class="highlighter-rouge">.pagination-lg</code> or <code class="highlighter-rouge">.pagination-sm</code> for additional sizes.</p>

<div class="bd-example" data-example-id="">
<nav aria-label="..."><ul class="pagination pagination-lg">
<li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">«</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">»</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul></nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-lg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Next"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<nav aria-label="..."><ul class="pagination pagination-sm">
<li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">«</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">»</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul></nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-sm"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Next"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>


        </div><div class=bd-content>
          <h1 class="bd-title" id="content">Progress</h1>
          <p>Stylize <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress">the HTML5 <code class="highlighter-rouge">&lt;progress&gt;</code> element</a> with a few extra classes and some crafty browser-specific CSS. Be sure to read up on the browser support.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
<li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#example" id="markdown-toc-example">Example</a></li>
  <li><a href="#ie9-support" id="markdown-toc-ie9-support">IE9 support</a></li>
  <li>
<a href="#contextual-alternatives" id="markdown-toc-contextual-alternatives">Contextual alternatives</a>    <ul>
<li><a href="#striped" id="markdown-toc-striped">Striped</a></li>
      <li><a href="#animated-stripes" id="markdown-toc-animated-stripes">Animated stripes</a></li>
    </ul>
</li>
</ul>
<h2 id="example">Example</h2>

<p>To caption a progress bar, simply add a <code class="highlighter-rouge">&lt;div&gt;</code> with your caption text, <a href="/utilities/typography/#text-alignment">align the text using a utility class</a>, and associate the caption with the <code class="highlighter-rouge">&lt;progress&gt;</code> element using the <code class="highlighter-rouge">aria-describedby</code> attribute.</p>

<div class="bd-example" data-example-id="">
<div class="text-xs-center" id="example-caption-1">Reticulating splines… 0%</div>
<progress class="progress" value="0" max="100" aria-describedby="example-caption-1"></progress><div class="text-xs-center" id="example-caption-2">Reticulating splines… 25%</div>
<progress class="progress" value="25" max="100" aria-describedby="example-caption-2"></progress><div class="text-xs-center" id="example-caption-3">Reticulating splines… 50%</div>
<progress class="progress" value="50" max="100" aria-describedby="example-caption-3"></progress><div class="text-xs-center" id="example-caption-4">Reticulating splines… 75%</div>
<progress class="progress" value="75" max="100" aria-describedby="example-caption-4"></progress><div class="text-xs-center" id="example-caption-5">Reticulating splines… 100%</div>
<progress class="progress" value="100" max="100" aria-describedby="example-caption-5"></progress>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-1"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 0%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"0"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-1"</span><span class="nt">&gt;&lt;/progress&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-2"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 25%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"25"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-2"</span><span class="nt">&gt;&lt;/progress&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-3"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 50%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"50"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-3"</span><span class="nt">&gt;&lt;/progress&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-4"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 75%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"75"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-4"</span><span class="nt">&gt;&lt;/progress&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-5"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 100%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"100"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-5"</span><span class="nt">&gt;&lt;/progress&gt;</span></code></pre></div>

<h2 id="ie9-support">IE9 support</h2>

<p>Internet Explorer 9 doesnât support the HTML5 <code class="highlighter-rouge">&lt;progress&gt;</code> element, but we can work around that.</p>

<div class="bd-example" data-example-id="">
<div class="text-xs-center" id="example-caption-6">Reticulating splines… 25%</div>
<progress class="progress" value="25" max="100" aria-describedby="example-caption-6"><div class="progress">
    <span class="progress-bar" style="width: 25%;"></span>
  </div>
</progress>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-6"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 25%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"25"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-6"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">style=</span><span class="s">"width: 25%;"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/progress&gt;</span></code></pre></div>

<h2 id="contextual-alternatives">Contextual alternatives</h2>

<p>Progress bars use some of the same button and alert classes for consistent styles.</p>

<div class="bd-example" data-example-id="">
<progress class="progress progress-success" value="25" max="100"></progress><progress class="progress progress-info" value="50" max="100"></progress><progress class="progress progress-warning" value="75" max="100"></progress><progress class="progress progress-danger" value="100" max="100"></progress>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-success"</span> <span class="na">value=</span><span class="s">"25"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-info"</span> <span class="na">value=</span><span class="s">"50"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-warning"</span> <span class="na">value=</span><span class="s">"75"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-danger"</span> <span class="na">value=</span><span class="s">"100"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span></code></pre></div>

<h3 id="striped">Striped</h3>

<p>Uses a gradient to create a striped effect.</p>

<div class="bd-example" data-example-id="">
<progress class="progress progress-striped" value="10" max="100"></progress><progress class="progress progress-striped progress-success" value="25" max="100"></progress><progress class="progress progress-striped progress-info" value="50" max="100"></progress><progress class="progress progress-striped progress-warning" value="75" max="100"></progress><progress class="progress progress-striped progress-danger" value="100" max="100"></progress>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span> <span class="na">value=</span><span class="s">"10"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped progress-success"</span> <span class="na">value=</span><span class="s">"25"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped progress-info"</span> <span class="na">value=</span><span class="s">"50"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped progress-warning"</span> <span class="na">value=</span><span class="s">"75"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped progress-danger"</span> <span class="na">value=</span><span class="s">"100"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span></code></pre></div>

<h3 id="animated-stripes">Animated stripes</h3>

<p>The striped gradient can also be animated. Add <code class="highlighter-rouge">.progress-animated</code> to <code class="highlighter-rouge">.progress</code> to animate the stripes right to left via CSS3 animations.</p>

<p><strong>Animated progress bars do not work in IE9 and Opera 12</strong> â as they donât support CSS3 animations â <strong>nor in IE10+ and Microsoft Edge</strong> â as they currently donât support CSS3 animations on the <a href="https://msdn.microsoft.com/en-us/library/windows/apps/hh465757.aspx"><code class="highlighter-rouge">::-ms-fill</code> pseudo-element</a>.</p>

<div class="bd-example">
  <progress class="progress progress-striped" value="25" max="100"></progress><button type="button" class="btn btn-secondary bd-activate-animated-progressbar" data-toggle="button" aria-pressed="false" autocomplete="off">
    Toggle animation
  </button>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped progress-animated"</span> <span class="na">value=</span><span class="s">"25"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span></code></pre></figure>
</div><div class=bd-content>
          <h1 class="bd-title" id="content">Tags</h1>
          <p>Small and adaptive tag for adding context to just about any content.</p>

<h2 id="example">Example</h2>

<p>Tags scale to match the size of the immediate parent element by using relative font sizing and <code class="highlighter-rouge">em</code> units.</p>

<div class="bd-example" data-example-id="">
<h1>Example heading <span class="tag tag-default">New</span>
</h1>
<h2>Example heading <span class="tag tag-default">New</span>
</h2>
<h3>Example heading <span class="tag tag-default">New</span>
</h3>
<h4>Example heading <span class="tag tag-default">New</span>
</h4>
<h5>Example heading <span class="tag tag-default">New</span>
</h5>
<h6>Example heading <span class="tag tag-default">New</span>
</h6>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h6&gt;</span></code></pre></div>

<h2 id="contextual-variations">Contextual variations</h2>

<p>Add any of the below mentioned modifier classes to change the appearance of a tag.</p>

<div class="bd-example" data-example-id="">
<span class="tag tag-default">Default</span>
<span class="tag tag-primary">Primary</span>
<span class="tag tag-success">Success</span>
<span class="tag tag-info">Info</span>
<span class="tag tag-warning">Warning</span>
<span class="tag tag-danger">Danger</span>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h4>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies â such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h2 id="pill-tags">Pill tags</h2>

<p>Use the <code class="highlighter-rouge">.tag-pill</code> modifier class to make tags more rounded (with a larger <code class="highlighter-rouge">border-radius</code> and additional horizontal <code class="highlighter-rouge">padding</code>). Useful if you miss the badges from v3.</p>

<div class="bd-example" data-example-id="">
<span class="tag tag-pill tag-default">Default</span>
<span class="tag tag-pill tag-primary">Primary</span>
<span class="tag tag-pill tag-success">Success</span>
<span class="tag tag-pill tag-info">Info</span>
<span class="tag tag-pill tag-warning">Warning</span>
<span class="tag tag-pill tag-danger">Danger</span>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-pill tag-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-pill tag-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-pill tag-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-pill tag-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-pill tag-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-pill tag-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span></code></pre></div>


        </div>