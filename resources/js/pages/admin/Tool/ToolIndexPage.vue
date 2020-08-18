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
						<v-card-title class="tw-text-2xl">Alat dan Pengembangan</v-card-title>
						<!-- Add Button -->
						<v-card-actions>
							<v-btn fab color="primary" small :to="{name: 'admin-tool-create'}">
								<v-icon>mdi-plus</v-icon>
							</v-btn>
						</v-card-actions>
						<!-- Table -->
						<tool-table></tool-table>
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
import ToolTable from "../../../components/admin/ToolTable";

export default {
	components: {
		AdminNavigation,
		ToolTable,
	},
};
</script>

<style>
</style>