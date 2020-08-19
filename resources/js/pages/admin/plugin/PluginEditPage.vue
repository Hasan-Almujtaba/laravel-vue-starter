<template>
	<div>
		<!-- App wrapper -->
		<v-app>
			<!-- Navigation -->
			<admin-navigation></admin-navigation>
			<!-- Content Wrapper -->
			<v-main>
				<!-- Provides the application the proper gutter -->
				<v-container fluid>
					<!-- Content -->
					<v-card max-width="1000">
						<!-- Title -->
						<v-card-title>Ubah Item</v-card-title>
						<!-- Form -->
						<plugin-edit-form :id="id"></plugin-edit-form>
					</v-card>
				</v-container>
			</v-main>

			<v-footer app>
				<v-icon>mdi-copyright</v-icon>
				{{ new Date().getFullYear() }} V-CONNEXT
			</v-footer>
		</v-app>
	</div>
</template>

<script>
import AdminNavigation from "../../../components/admin/AdminNavigation";
import PluginEditForm from "../../../components/admin/PluginEditForm";

export default {
	components: {
		AdminNavigation,
		PluginEditForm,
	},
	props: {
		id: null,
	},
};
</script>

<style>
</style>