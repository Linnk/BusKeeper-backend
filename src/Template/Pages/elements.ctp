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
}</style><div class="bd-pageheader container-full"><div class="container"><h1>Bootstrap's Elements</h1><p class="lead">Just examples of elements like buttons, dropdowns, input groups, navigation, alerts, and much more.</p></div></div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
</div><div class=bd-example>
<div class="alert alert-warning alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
</div>
</div><div class=bd-example>
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
</div><div class=bd-example>
<nav class="breadcrumb"><a class="breadcrumb-item" href="#">Home</a>
  <a class="breadcrumb-item" href="#">Library</a>
  <a class="breadcrumb-item" href="#">Data</a>
  <span class="breadcrumb-item active">Bootstrap</span>
</nav>
</div><div class=bd-example>
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
</div><div class=bd-example>
<a class="btn btn-primary" href="#" role="button">Link</a>
<button class="btn btn-primary" type="submit">Button</button>
<input class="btn btn-primary" type="button" value="Input"><input class="btn btn-primary" type="submit" value="Submit"><input class="btn btn-primary" type="reset" value="Reset">
</div><div class=bd-example>
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
</div><div class=bd-example>
<button type="button" class="btn btn-primary btn-lg">Large button</button>
<button type="button" class="btn btn-secondary btn-lg">Large button</button>
</div><div class=bd-example>
<button type="button" class="btn btn-primary btn-sm">Small button</button>
<button type="button" class="btn btn-secondary btn-sm">Small button</button>
</div><div class=bd-example>
<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
<button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
</div><div class=bd-example>
<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
<a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
</div><div class=bd-example>
<button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
<button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
</div><div class=bd-example>
<a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
<a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
</div><div class=bd-example>
<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  Single toggle
</button>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Left</button>
  <button type="button" class="btn btn-secondary">Middle</button>
  <button type="button" class="btn btn-secondary">Right</button>
</div>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="card">
  <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap"><div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="card">
  <ul class="list-group list-group-flush">
<li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
</div><div class=bd-example>
<div class="card">
  <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt="Card image cap"><div class="card-block">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div><div class=bd-example>
<div class="card card-block">
  <h4 class="card-title">Card title</h4>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="card card-block" style="width: 18rem;">
  <h3 class="card-title">Special title treatment</h3>
  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="card">
  <h3 class="card-header">Featured</h3>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="card card-inverse">
  <img class="card-img" data-src="holder.js/100px270/#55595c:#373a3c/text:Card image" alt="Card image"><div class="card-img-overlay">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div><div class=bd-example>
<div class="card card-inverse" style="background-color: #333; border-color: #333;">
  <div class="card-block">
    <h3 class="card-title">Special title treatment</h3>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="dropdown-menu">
  <h6 class="dropdown-header">Dropdown header</h6>
  <a class="dropdown-item" href="#">Action</a>
  <a class="dropdown-item" href="#">Another action</a>
</div>
</div><div class=bd-example>
<div class="dropdown-menu">
  <a class="dropdown-item" href="#">Action</a>
  <a class="dropdown-item" href="#">Another action</a>
  <a class="dropdown-item" href="#">Something else here</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">Separated link</a>
</div>
</div><div class=bd-example>
<div class="dropdown-menu">
  <a class="dropdown-item" href="#">Regular link</a>
  <a class="dropdown-item disabled" href="#">Disabled link</a>
  <a class="dropdown-item" href="#">Another link</a>
</div>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<label class="form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> 1
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> 2
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> 3
</label>
</div><div class=bd-example>
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
</label>
</div><div class=bd-example>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."></label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="..."></label>
</div>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<input class="form-control" type="text" placeholder="Readonly input hereâ¦" readonly>
</div><div class=bd-example>
<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"><input class="form-control" type="text" placeholder="Default input"><input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
</div><div class=bd-example>
<select class="form-control form-control-lg"><option>Large select</option></select><select class="form-control"><option>Default select</option></select><select class="form-control form-control-sm"><option>Small select</option></select>
</div><div class=bd-example>
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
</div><div class=bd-example>
<label for="inputPassword5">Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"><p id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</p>
</div><div class=bd-example>
<form class="form-inline">
  <div class="form-group">
    <label for="inputPassword4">Password</label>
    <input type="password" id="inputPassword4" class="form-control" aria-describedby="passwordHelpInline"><small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long.
    </small>
  </div>
</form>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span>
  <span class="custom-control-description">Check this custom checkbox</span>
</label>
</div><div class=bd-example>
  <label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span>
    <span class="custom-control-description">Check this custom checkbox</span>
  </label>
</div><div class=bd-example>
<label class="custom-control custom-radio">
  <input id="radio1" name="radio" type="radio" class="custom-control-input"><span class="custom-control-indicator"></span>
  <span class="custom-control-description">Toggle this custom radio</span>
</label>
<label class="custom-control custom-radio">
  <input id="radio2" name="radio" type="radio" class="custom-control-input"><span class="custom-control-indicator"></span>
  <span class="custom-control-description">Or toggle this other custom radio</span>
</label>
</div><div class=bd-example>
<label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" disabled><span class="custom-control-indicator"></span>
  <span class="custom-control-description">Check this custom checkbox</span>
</label>

<label class="custom-control custom-radio">
  <input id="radio3" name="radioDisabled" type="radio" class="custom-control-input" disabled><span class="custom-control-indicator"></span>
  <span class="custom-control-description">Toggle this custom radio</span>
</label>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<select class="custom-select"><option selected>Open this select menu</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option></select>
</div><div class=bd-example>
<label class="custom-file">
  <input type="file" id="file" class="custom-file-input"><span class="custom-file-control"></span>
</label>
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
</div>
<br><div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
</div>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="jumbotron">
  <h1 class="display-3">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-2">
<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
</div><div class=bd-example>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
</div><div class=bd-example>
<ul class="list-group">
<li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="list-group">
  <a href="#" class="list-group-item disabled">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>
</div><div class=bd-example>
<div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>
</div><div class=bd-example>
<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active">
    Cras justo odio
  </button>
  <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
  <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
  <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
  <button type="button" class="list-group-item list-group-item-action disabled">Vestibulum at eros</button>
</div>
</div><div class=bd-example>
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action list-group-item-success">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">Cras sit amet nibh libero</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Vestibulum at eros</a>
</div>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Launch demo modal
  </button>
</div><div class=bd-example>
  <button type=bd-example>Large modal</button>
  <button type=bd-example>Small modal</button>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="gridModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class=bd-example>
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
<div class=bd-example>
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal">
    Launch demo modal
  </button>
</div>
</div><div class=bd-example>
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
        </div><div class=bd-example>
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal">
    Launch demo modal
  </button>
</div><div class=bd-example>
<div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<nav class="nav"><a class="nav-link active" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav>
</div><div class=bd-example>
<nav class="nav nav-inline"><a class="nav-link active" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<nav class="nav nav-pills nav-stacked"><a class="nav-link active" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<!-- As a link -->
<nav class="navbar navbar-light bg-faded"><a class="navbar-brand" href="#">Navbar</a>
</nav><!-- As a heading --><nav class="navbar navbar-light bg-faded"><h1 class="navbar-brand mb-0">Navbar</h1>
</nav>
</div><div class=bd-example>
<!-- Just an image -->
<nav class="navbar navbar-light bg-faded"><a class="navbar-brand" href="#">
    <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""></a>
</nav>
</div><div class=bd-example>
<!-- Image and text -->
<nav class="navbar navbar-light bg-faded"><a class="navbar-brand" href="#">
    <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>
</nav>
</div><div class=bd-example>
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
</div><div class=bd-example>
<nav class="navbar navbar-light bg-faded"><div class="nav navbar-nav">
    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
    <a class="nav-item nav-link" href="#">Features</a>
    <a class="nav-item nav-link" href="#">Pricing</a>
    <a class="nav-item nav-link" href="#">About</a>
  </div>
</nav>
</div><div class=bd-example>
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
</div><div class=bd-example>
<nav class="navbar navbar-light bg-faded"><form class="form-inline float-xs-left">
    <input class="form-control" type="text" placeholder="Search"><button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</nav>
</div><div class=bd-example>
<nav class="navbar navbar-light bg-faded"><form class="form-inline float-xs-left">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>
  </form>
</nav>
</div><div class=bd-example>
<nav class="navbar navbar-light bg-faded"><form class="form-inline float-xs-left">
    <button class="btn btn-outline-success" type="button">Main button</button>
    <button class="btn btn-sm align-middle btn-outline-secondary" type="button">Smaller button</button>
  </form>
</nav>
</div><div class=bd-example>
<nav class="navbar navbar-light bg-faded"><span class="navbar-text">
    Navbar text with an inline element
  </span>
</nav>
</div><div class=bd-example>
<nav class="navbar navbar-light bg-faded"><span class="navbar-text float-xs-right text-muted">
    Muted navbar text that's floated right
  </span>
</nav>
</div><div class=bd-example>
<nav class="navbar navbar-light bg-faded"><a class="navbar-brand" href="#">Navbar</a>
  <span class="navbar-text float-xs-left">
    Navbar text that's floated left
  </span>
</nav>
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="container">
  <nav class="navbar navbar-light bg-faded"><a class="navbar-brand" href="#">Navbar</a>
  </nav>
</div>
</div><div class=bd-example>
<nav class="navbar navbar-light bg-faded"><div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>
</div><div class=bd-example>
<nav class="navbar navbar-full navbar-light bg-faded"><a class="navbar-brand" href="#">Full width</a>
</nav>
</div><div class=bd-example>
<nav class="navbar navbar-fixed-top navbar-light bg-faded"><a class="navbar-brand" href="#">Fixed top</a>
</nav>
</div><div class=bd-example>
<nav class="navbar navbar-fixed-bottom navbar-light bg-faded"><a class="navbar-brand" href="#">Fixed bottom</a>
</nav>
</div><div class=bd-example>
<nav class="navbar navbar-light bg-faded"><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation"></button>
  <div class="collapse" id="exCollapsingNavbar">
    <div class="bg-inverse text-muted p-1">
      <h4>Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
</nav>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<nav aria-label="..."><ul class="pagination">
<li class="page-item disabled">
      <span class="page-link" aria-label="Previous">
        <span aria-hidden="true">«</span>
        <span class="sr-only">Previous</span>
      </span>
    </li>
    <li class="page-item active"><span class="page-link">1 <span class="sr-only">(current)</span></span></li>
  </ul></nav>
</div><div class=bd-example>
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
</div><div class=bd-example>
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
</div><div class=bd-example>
<div class="text-xs-center" id="example-caption-1">Reticulating splines… 0%</div>
<progress class="progress" value="0" max="100" aria-describedby="example-caption-1"></progress><div class="text-xs-center" id="example-caption-2">Reticulating splines… 25%</div>
<progress class="progress" value="25" max="100" aria-describedby="example-caption-2"></progress><div class="text-xs-center" id="example-caption-3">Reticulating splines… 50%</div>
<progress class="progress" value="50" max="100" aria-describedby="example-caption-3"></progress><div class="text-xs-center" id="example-caption-4">Reticulating splines… 75%</div>
<progress class="progress" value="75" max="100" aria-describedby="example-caption-4"></progress><div class="text-xs-center" id="example-caption-5">Reticulating splines… 100%</div>
<progress class="progress" value="100" max="100" aria-describedby="example-caption-5"></progress>
</div><div class=bd-example>
<div class="text-xs-center" id="example-caption-6">Reticulating splines… 25%</div>
<progress class="progress" value="25" max="100" aria-describedby="example-caption-6"><div class="progress">
    <span class="progress-bar" style="width: 25%;"></span>
  </div>
</progress>
</div><div class=bd-example>
<progress class="progress progress-success" value="25" max="100"></progress><progress class="progress progress-info" value="50" max="100"></progress><progress class="progress progress-warning" value="75" max="100"></progress><progress class="progress progress-danger" value="100" max="100"></progress>
</div><div class=bd-example>
<progress class="progress progress-striped" value="10" max="100"></progress><progress class="progress progress-striped progress-success" value="25" max="100"></progress><progress class="progress progress-striped progress-info" value="50" max="100"></progress><progress class="progress progress-striped progress-warning" value="75" max="100"></progress><progress class="progress progress-striped progress-danger" value="100" max="100"></progress>
</div><div class=bd-example>
  <progress class="progress progress-striped" value="25" max="100"></progress><button type="button" class="btn btn-secondary bd-activate-animated-progressbar" data-toggle="button" aria-pressed="false" autocomplete="off">
    Toggle animation
  </button>
</div><div class=bd-example>
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
</div><div class=bd-example>
<span class="tag tag-default">Default</span>
<span class="tag tag-primary">Primary</span>
<span class="tag tag-success">Success</span>
<span class="tag tag-info">Info</span>
<span class="tag tag-warning">Warning</span>
<span class="tag tag-danger">Danger</span>
</div><div class=bd-example>
<span class="tag tag-pill tag-default">Default</span>
<span class="tag tag-pill tag-primary">Primary</span>
<span class="tag tag-pill tag-success">Success</span>
<span class="tag tag-pill tag-info">Info</span>
<span class="tag tag-pill tag-warning">Warning</span>
<span class="tag tag-pill tag-danger">Danger</span>
</div>