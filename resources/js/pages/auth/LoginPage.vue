<template>
	<!-- App wrapper -->
	<v-app>
		<!-- Navigation -->
		<v-app-bar color="primary" dark app>
			<v-toolbar-title>Panduan Pengembangan</v-toolbar-title>
		</v-app-bar>

		<!-- Content Wrapper -->
		<v-main>
			<!-- Provides the application the proper gutter -->
			<v-container fluid class="fill-height">
				<!-- Content -->
				<login-form></login-form>
			</v-container>
		</v-main>

		<v-footer app>
			<v-icon>mdi-copyright</v-icon>
			{{ new Date().getFullYear() }} V-CONNEXT
		</v-footer>
	</v-app>
</template>

<script>
import LoginForm from "../../components/auth/LoginForm";

export default {
	components: {
		LoginForm,
	},
	data: () => ({}),
};
</script>

<style>
</style>