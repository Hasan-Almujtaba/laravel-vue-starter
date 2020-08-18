<template>
	<div>
		<!-- Navigation Drawer -->
		<v-navigation-drawer v-model="drawer" :clipped="$vuetify.breakpoint.lgAndUp" app>
			<v-list shaped>
				<v-list-item-group color="primary">
					<v-list-item v-for="(item, i) in items" :key="i">
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
		<v-app-bar :clipped-left="$vuetify.breakpoint.lgAndUp" app color="blue darken-3" dark>
			<v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
			<v-toolbar-title style="width: 300px" class="ml-0 pl-4">
				<span class="hidden-sm-and-down">Panduan Pengembangan</span>
			</v-toolbar-title>
		</v-app-bar>
	</div>
</template>

<script>
export default {
	data: () => ({
		drawer: null,
		items: [
			{ icon: "mdi-tools", text: "Alat Pengembangan" },
			{ icon: "mdi-code-tags", text: "Gaya Penulisan Kode" },
			{ icon: "mdi-toy-brick-plus ", text: "Plugin dan library" },
			{ icon: "mdi-link", text: "Referensi" },
		],
	}),
};
</script>

<style>
</style>