import { v4wp } from '@kucrut/vite-for-wp';
import react from '@vitejs/plugin-react';

export default {
	plugins: [
		v4wp( {
			input: 'js/src/main.jsx',
			outDir: 'js/dist',
		} ),
		// wp_scripts(),
		react( {
			jsxRuntime: 'classic',
		} ),
	],
};
