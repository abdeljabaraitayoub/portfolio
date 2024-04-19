import { createApp } from "vue";
import "./style.css";
import App from "./App.vue";
import router from "./router";
import { createPinia } from "pinia";

import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import {
  faEnvelope,
  faMoon,
  faSun,
  faUserSecret,
} from "@fortawesome/free-solid-svg-icons";
import {
  faFacebook,
  faGithub,
  faInstagram,
  faLinkedin,
  faTwitter,
} from "@fortawesome/free-brands-svg-icons";

// Add icons to the library
library.add(
  faUserSecret,
  faFacebook,
  faLinkedin,
  faInstagram,
  faGithub,
  faTwitter,
  faMoon,
  faSun,
  faEnvelope
);

const pinia = createPinia();

const app = createApp(App)
  .use(router)
  .use(pinia)
  .component("font-awesome-icon", FontAwesomeIcon)
  .mount("#app");
