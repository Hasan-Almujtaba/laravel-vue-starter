<template>
	<v-row align="center" justify="center">
		<v-col cols="12" sm="8" md="4">
			<v-card>
				<v-toolbar color="primary" dark flat>
					<v-spacer></v-spacer>
					<v-toolbar-title>
						<v-icon>mdi-login</v-icon>Login
					</v-toolbar-title>
					<v-spacer></v-spacer>
				</v-toolbar>
				<v-card-text>
					<v-form>
						<v-text-field label="username" v-model="form.username"></v-text-field>
						<v-text-field label="password" v-model="form.password" type="password"></v-text-field>
						<div class="text-right">
							<v-btn color="primary" @click="submit">Login</v-btn>
						</div>
					</v-form>
				</v-card-text>
			</v-card>
		</v-col>
	</v-row>
</template>

<script>
export default {
	data: () => ({
		form: {
			username: "",
			password: "",
		},
	}),
	methods: {
		submit() {
			alert(this.form);
		},
	},
};
</script>

<style>
</style>