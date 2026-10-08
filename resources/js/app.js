import './bootstrap';
import '../css/app.css'
import { createApp } from 'vue'
import App from './components/templates/App.vue'

// ROUTER
import router  from './router.js'

// VUETIFY
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

// MDI/FONT
import '@mdi/font/css/materialdesignicons.css'

// PINIA
import { createPinia } from 'pinia'

const kooku = {
    dark: false,
    colors: {
        background: '#FFF7FB',
        surface: '#FFFFFF',
        primary: '#CF2E84',
        secondary: '#FF80C7',
        error: '#C62839',
        success: '#1F8F5F',
        warning: '#A35F00',
    },
}

const pinia = createPinia()
const vuetify = createVuetify({
    components,
    directives,
    icons: {
        defaultSet: 'mdi',
    },
    theme: {
        defaultTheme: 'kooku',
        themes: { kooku },
    },
})

const app = createApp(App)
app.use(pinia)
app.use(vuetify)
app.use(router)
app.mount('#app')
