<template>
	<div>
		<!-- Navigation Drawer -->
		<v-navigation-drawer v-model="drawer" clipped app>
			<v-list shaped>
				<v-list-item-group color="primary">
					<v-list-item v-for="(item, i) in items" :key="i" :to="{name: item.url}">
						<v-list-item-icon>
							<v-icon v-text="item.icon"></v-icon>
						</v-list-item-icon>
						<v-list-item-content>
							<v-list-item-title v-text="item.text"></v-list-item-title>
						</v-list-item-content>
					</v-list-item>
				</v-list-item-group>
			</v-list>
		</v-navigation-drawer>

		<!-- App Header -->
		<v-app-bar
			:clipped-left="$vuetify.breakpoint.lgAndUp"
			:clipped-right="$vuetify.breakpoint.lgAndUp"
			app
			color="blue darken-3"
			dark
		>
			<v-app-bar-nav-icon @click.stop="drawer = !drawer" class="lg:tw-hidden"></v-app-bar-nav-icon>
			<v-toolbar-title style="width: 300px" class="ml-0 pl-4">Panduan Pengembangan</v-toolbar-title>
		</v-app-bar>
	</div>
</template>

<script>
export default {
	data: () => ({
		drawer: null,
		items: [
			{ icon: "mdi-hammer-wrench", text: "Instalasi", url: "installation" },
			{ icon: "mdi-tools", text: "Alat Pengembangan", url: "resource" },
			{ icon: "mdi-code-tags", text: "Gaya Penulisan Kode", url: "style" },
			{
				icon: "mdi-toy-brick-plus ",
				text: "Plugin dan library",
				url: "plugin",
			},
			{ icon: "mdi-link", text: "Referensi", url: "reference" },
		],
	}),
};
</script>

<style>
</style>