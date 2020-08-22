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
				<h1 class="text-h4 font-weight-thin">Alat Pengembangan</h1>
				<p
					class="text-body-1"
				>Halaman ini berisi alat-alat terkait yang direkomendasikan dalam proses pengembangan aplikasi seperti framework yang digunakan, text editor, database management, dll</p>
				<tool-page-content></tool-page-content>
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
import ToolPageContent from "../../components/web/ToolPageContent";

export default {
	components: {
		WebNavigation,
		ToolPageContent,
	},
	data: () => ({}),
};
</script>

<style>
</style>