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
						<style-edit-form :id="id"></style-edit-form>
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
import StyleEditForm from "../../../components/admin/StyleEditForm";
export default {
	components: {
		AdminNavigation,
		StyleEditForm,
	},
	props: {
		id: null,
	},
};
</script>
<style>
</style> 