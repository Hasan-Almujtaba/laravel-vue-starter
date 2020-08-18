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
				<ckeditor :editor="editor" v-model="form.content" :config="editorConfig"></ckeditor>
				<v-btn color="primary" @click.prevent="updateTool(form)" right class="mt-3">Simpan</v-btn>
			</v-container>
		</v-form>
	</div>
</template>

<script>
import { mapActions, mapState } from "vuex";
import CKEditor from "@ckeditor/ckeditor5-vue";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

export default {
	components: {
		// McWysiwyg,
		ckeditor: CKEditor.component,
	},
	props: {
		id: null,
	},
	data: () => ({
		editor: ClassicEditor,
		editorConfig: {},
	}),
	methods: {
		...mapActions("tool", ["getTool", "updateTool"]),
	},
	mounted() {
		this.getTool(this.id);
	},
	computed: {
		...mapState(["errors"]),
		...mapState("tool", ["tool"]),
		form: {
			get() {
				return this.tool;
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