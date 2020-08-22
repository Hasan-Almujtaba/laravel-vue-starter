<template>
	<!-- App wrapper -->
	<v-app>
		<!-- Navigation -->
		<web-navigation></web-navigation>

		<!-- Content Wrapper -->
		<v-main>
			<!-- Provides the application the proper gutter -->
			<v-container fluid>
				<!-- Content -->
				<h1 class="text-h4 font-weight-thin">Referensi</h1>
				<p
					class="text-body-1"
				>Referensi dari berbagai sumber data-data yang digunakan dalam panduan pengembangan</p>
				<plugin-page-content></plugin-page-content>
			</v-container>
		</v-main>

		<v-footer app>
			<v-icon>mdi-copyright</v-icon>
			{{ new Date().getFullYear() }} V-CONNEXT
		</v-footer>
	</v-app>
</template>

<script>
import WebNavigation from "../../components/web/WebNavigation";
import PluginPageContent from "../../components/web/PluginPageContent";

export default {
	components: {
		WebNavigation,
		PluginPageContent,
	},
};
</script>