<template>
	<div v-if="form">
		<v-form>
			<v-container>
				<v-text-field
					v-model="form.title"
					placeholder="Judul"
					clearable
					required
					class="mb-3"
					:error-messages="errors.title"
				></v-text-field>
				<small class="tw-text-red-500" v-if="errors.content">{{ errors.content[0] }}</small>
				<ckeditor v-model="form.content"></ckeditor>
				<v-btn color="primary" @click.prevent="updateStyle(form)" right class="mt-3">Simpan</v-btn>
			</v-container>
		</v-form>
	</div>
</template>

<script>
import { mapActions, mapState } from "vuex";
import CKEditor from "ckeditor4-vue";

export default {
	components: {
		// McWysiwyg,
		ckeditor: CKEditor.component,
	},
	props: {
		id: null,
	},
	data: () => ({}),
	methods: {
		...mapActions("style", ["getStyle", "updateStyle"]),
	},
	mounted() {
		this.getStyle(this.id);
	},
	computed: {
		...mapState(["errors"]),
		...mapState("style", ["style"]),
		form: {
			get() {
				return this.style;
			},
		},
	},
};
</script>

<style>
	.ck-editor__editable {
		min-height: 300px;
	}
</style> 