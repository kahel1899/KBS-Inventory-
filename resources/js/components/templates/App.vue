<template>
    <v-app>
        <v-navigation-drawer v-model="drawer" width="248" class="kbs-drawer">
            <div class="kbs-brand">
                <span class="kbs-brand__name">Kooku</span>
                <span class="kbs-brand__sub">Beauty Supplies</span>
            </div>

            <v-list nav density="comfortable" class="px-3">
                <v-list-item
                    v-for="item in items"
                    :key="item.path"
                    :to="item.path"
                    :prepend-icon="item.icon"
                    :title="item.title"
                    color="primary"
                    rounded="lg"
                />
            </v-list>
        </v-navigation-drawer>

        <v-app-bar flat border="b" color="surface" height="56">
            <v-app-bar-nav-icon
                aria-label="Toggle menu"
                @click.stop="drawer = !drawer"
            />
            <v-toolbar-title class="kbs-bar-title">
                {{ $route.name || 'Kooku Beauty Supplies' }}
            </v-toolbar-title>
        </v-app-bar>

        <v-main>
            <router-view></router-view>
        </v-main>
    </v-app>
</template>

<script>
export default {
    data: () => ({
        // null = open on desktop, closed on mobile (Vuetify decides)
        drawer: null,
        items: [
            {
                title: 'Dashboard',
                path: '/Dashboard',
                icon: 'mdi-view-dashboard-outline',
            },
            {
                title: 'Inventory',
                path: '/Inventory',
                icon: 'mdi-archive-outline',
            },
        ],
    }),
}
</script>

<style scoped>
.kbs-brand {
    padding: 22px 24px 14px;
    display: flex;
    flex-direction: column;
    line-height: 1.1;
}

.kbs-brand__name {
    font-family: var(--kbs-font-display);
    font-weight: 700;
    font-size: 28px;
    color: var(--kbs-brand);
    letter-spacing: -0.02em;
}

.kbs-brand__sub {
    font-size: 13px;
    color: var(--kbs-muted);
    margin-top: 2px;
}

.kbs-bar-title {
    font-family: var(--kbs-font-display);
    font-weight: 600;
    font-size: 18px;
}
</style>
