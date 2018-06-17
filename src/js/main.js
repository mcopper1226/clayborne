/* global IS_DEV */

import devtools from './devtools';
import button from './components/button';
import lazy from './components/lazyLoad'

function loaded() {
  devtools.init(IS_DEV);
  lazy(); 
  button();

}

document.addEventListener('DOMContentLoaded', loaded);
