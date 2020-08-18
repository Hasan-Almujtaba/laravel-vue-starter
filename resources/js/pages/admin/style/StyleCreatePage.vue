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
						<v-card-title>Tambah Item</v-card-title>
						<!-- Form -->
						<style-create-form></style-create-form>
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
import StyleCreateForm from "../../../components/admin/StyleCreateForm";
export default {
	components: {
		AdminNavigation,
		StyleCreateForm,
	},
};
</script>
<style>
</style> 