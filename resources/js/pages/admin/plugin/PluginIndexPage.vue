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
						<v-card-title class="tw-text-2xl">Plugin dan Library</v-card-title>
						<!-- Add Button -->
						<v-card-actions>
							<v-btn fab color="primary" small :to="{name: 'admin-plugin-create'}">
								<v-icon>mdi-plus</v-icon>
							</v-btn>
						</v-card-actions>
						<!-- Table -->
						<plugin-table></plugin-table>
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
import PluginTable from "../../../components/admin/PluginTable";

export default {
	components: {
		AdminNavigation,
		PluginTable,
	},
};
</script>

<style>
</style>