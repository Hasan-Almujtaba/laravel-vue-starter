<template>
	<div>
		<!-- App wrapper -->
		<v-app>
			<!-- Navigation -->
			<web-navigation></web-navigation>
			<!-- Content List Sidebar -->
			<content-list-sidebar></content-list-sidebar>
			<!-- Content Wrapper -->
			<v-main>
				<!-- Provides the application the proper gutter -->
				<v-container fluid>
					<!-- Content -->
					<installation-page-content></installation-page-content>
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
import WebNavigation from "../../components/web/WebNavigation";
import ContentListSidebar from "../../components/web/ContentListSidebar";
import InstallationPageContent from "../../components/web/InstallationPageContent";

export default {
	components: {
		WebNavigation,
		ContentListSidebar,
		InstallationPageContent,
	},
	data: () => ({}),
};
</script>

<style>
</style>