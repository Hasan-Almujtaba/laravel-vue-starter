<template>
	<div>
		<!-- App wrapper -->
		<v-app>
			<!-- Navigation -->
			<web-navigation></web-navigation>

			<!-- Content Wrapper -->
			<v-main>
				<!-- Provides the application the proper gutter -->
				<v-container fluid>
					<!-- Content -->
					<v-btn color="primary" :to="{name:'admin-dashboard'}">Admin</v-btn>
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
export default {
	components: {
		WebNavigation,
	},
};
</script>

<style>
</style>