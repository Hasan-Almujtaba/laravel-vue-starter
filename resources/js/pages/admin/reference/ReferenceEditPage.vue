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
						<reference-edit-form :id="id"></reference-edit-form>
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
import ReferenceEditForm from "../../../components/admin/ReferenceEditForm";

export default {
	components: {
		AdminNavigation,
		ReferenceEditForm,
	},
	props: {
		id: null,
	},
};
</script>

<style>
</style>