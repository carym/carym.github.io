<?php
  print("foo")
?>
.container {
  max-width: 800px; }
.header {
  margin-top: 6rem;
  text-align: center; }
.value-prop {
  margin-top: 1rem; }
.value-props {
  margin-top: 4rem;
  margin-bottom: 4rem; }
.docs-header {
  text-transform: uppercase;
  font-size: 1.4rem;
  letter-spacing: .2rem;
  font-weight: 600; }
.docs-section {
  border-top: 1px solid #eee;
  padding: 4rem 0;
  margin-bottom: 0;}
.value-img {
  display: block;
  text-align: center;
  margin: 2.5rem auto 0; }
.example-grid .column,
.example-grid .columns {
  background: #EEE;
  text-align: center;
  border-radius: 4px;
  font-size: 1rem;
  text-transform: uppercase;
  height: 30px;
  line-height: 30px;
  margin-bottom: .75rem;
  font-weight: 600;
  letter-spacing: .1rem; }
.docs-example .row,
.docs-example.row,
.docs-example form {
  margin-bottom: 0; }
.docs-example h1,
.docs-example h2,
.docs-example h3,
.docs-example h4,
.docs-example h5,
.docs-example h6 {
  margin-bottom: 1rem; }
.heading-font-size {
  font-size: 1.2rem;
  color: #999;
  letter-spacing: normal; }
.code-example {
  margin-top: 1.5rem;
  margin-bottom: 0; }
.code-example-body {
  white-space: pre;
  word-wrap: break-word }
.example {
  position: relative; 
  margin-top: 4rem; }
.example-header {
  font-weight: 600;
  margin-top: 1.5rem;
  margin-bottom: .5rem; }
.example-description {
  margin-bottom: 1.5rem; }
.example-screenshot-wrapper {
  display: block;
  position: relative;
  overflow: hidden;
  border-radius: 6px;
  border: 1px solid #eee;
  height: 250px; }
.example-screenshot {
  width: 100%;
  height: auto; }
.example-screenshot.coming-soon {
  width: auto;
  position: absolute;
  background: #eee;
  top: 5px;
  right: 5px;
  bottom: 5px;
  left: 5px; }
.navbar {
  display: none; }

/* Larger than phone */
@media (min-width: 550px) {
  .header {
    margin-top: 5rem; }
  .value-props {
    margin-top: 9rem;
    margin-bottom: 7rem; }
  .value-img {
    margin-bottom: 1rem; }
  .example-grid .column,
  .example-grid .columns {
    margin-bottom: 1.5rem; }
  .docs-section {
    padding: 6rem 0; }
  .example-send-yourself-copy {
    float: right;
    margin-top: 12px; }
  .example-screenshot-wrapper {
    position: absolute;
    width: 48%;
    height: 100%;
    left: 0;
    max-height: none; }
}

/* Larger than tablet */
@media (min-width: 750px) {
  /* Navbar */
  .navbar + .docs-section {
    border-top-width: 0; }
  .navbar,
  .navbar-spacer {
    display: block;
    width: 100%;
    height: 6.5rem;
    background: #fff;
    z-index: 99;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee; }
  .navbar-spacer {
    display: none; }
  .navbar > .container {
    width: 100%; }
  .navbar-list {
    list-style: none;
    margin-bottom: 0; }
  .navbar-item {
    position: relative;
    float: left;
    margin-bottom: 0; }
  .navbar-link {
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: .2rem;
    margin-right: 35px;
    text-decoration: none;
    line-height: 6.5rem;
    color: #222; }
  .navbar-link.active {
    color: #33C3F0; }
  .has-docked-nav .navbar {
    position: fixed;
    top: 0;
    left: 0; }
  .has-docked-nav .navbar-spacer {
    display: block; }
  /* Re-overiding the width 100% declaration to match size of % based container */
  .has-docked-nav .navbar > .container {
    width: 80%; }

  /* Popover */
  .popover.open {
    display: block;
  }
  .popover {
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    background: #fff;
    border: 1px solid #eee;
    border-radius: 4px;
    top: 92%;
    left: -50%;
    -webkit-filter: drop-shadow(0 0 6px rgba(0,0,0,.1));
       -moz-filter: drop-shadow(0 0 6px rgba(0,0,0,.1));
            filter: drop-shadow(0 0 6px rgba(0,0,0,.1)); }
  .popover-item:first-child .popover-link:after, 
  .popover-item:first-child .popover-link:before {
    bottom: 100%;
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none; }
  .popover-item:first-child .popover-link:after {
    border-color: rgba(255, 255, 255, 0);
    border-bottom-color: #fff;
    border-width: 10px;
    margin-left: -10px; }
  .popover-item:first-child .popover-link:before {
    border-color: rgba(238, 238, 238, 0);
    border-bottom-color: #eee;
    border-width: 11px;
    margin-left: -11px; }
  .popover-list {
    padding: 0;
    margin: 0;
    list-style: none; }
  .popover-item {
    padding: 0;
    margin: 0; }
  .popover-link {
    position: relative;
    color: #222;
    display: block;
    padding: 8px 20px;
    border-bottom: 1px solid #eee;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 1.0rem;
    font-weight: 600;
    text-align: center;
    letter-spacing: .1rem; }
  .popover-item:first-child .popover-link {
    border-radius: 4px 4px 0 0; }
  .popover-item:last-child .popover-link {
    border-radius: 0 0 4px 4px;
    border-bottom-width: 0; }
  .popover-link:hover {
    color: #fff;
    background: #33C3F0; }
  .popover-link:hover,
  .popover-item:first-child .popover-link:hover:after {
    border-bottom-color: #33C3F0; }
}
