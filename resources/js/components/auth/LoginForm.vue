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
						<v-alert type="error" v-if="errors.status === 401">{{ errors.data }}</v-alert>
						<v-text-field
							label="email"
							v-model="form.email"
							:error-messages="errors.data ? errors.data.email : null"
							type="email"
						></v-text-field>
						<v-text-field
							label="password"
							v-model="form.password"
							:error-messages="errors.data ? errors.data.password : null"
							type="password"
						></v-text-field>
						<div class="text-right">
							<v-btn color="primary" @click="login(form)">Login</v-btn>
						</div>
					</v-form>
				</v-card-text>
			</v-card>
		</v-col>
	</v-row>
</template>

<script>
import { mapState, mapActions } from "vuex";

export default {
	data: () => ({
		form: {
			email: "",
			password: "",
		},
	}),
	methods: {
		...mapActions("auth", ["login"]),
	},
	computed: {
		...mapState(["errors"]),
	},
};
</script>

<style>
</style>