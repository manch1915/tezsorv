<template>
    <div class="my-6 rounded ring ring-gray-600">
        <div id="editorjs" class="text-white"></div>
    </div>
</template>

<script setup>
import List from '@editorjs/list';
import ImageTool from '@editorjs/image';
import LinkTool from '@editorjs/link';
import Undo from 'editorjs-undo';
import EditorJS from '@editorjs/editorjs';
import Header from "@editorjs/header";

const editor = new EditorJS({
    holder: 'editorjs',

    tools: {
        paragraph: {
            config: {
                placeholder: 'Tell your story...'
            }
        },
        header: {
            class: Header,
            config: {
                placeholder: 'Enter a header',
                levels: [2, 3, 4],
                defaultLevel: 3
            }
        },
        list: {
            class: List,
            inlineToolbar: true,
        },
        image: {
            class: ImageTool,
            config: {
                endpoints: {
                    byFile: 'http://localhost:8000/main/thread/uploadFile', // Your backend file uploader endpoint
                }
            }
        },
        linkTool: {
            class: LinkTool,
            config: {
                endpoint: 'http://localhost:8000/main/thread/fetchUrl', // Your backend endpoint for url data fetching,
            }
        }

    },
    plugins: [],
    onReady: () => {
        new Undo({editor});
    },
},)

const emit = defineEmits(['saveData'])

const saveData = () => {
    editor.save().then((outputData) => {
        emit('saveData', outputData);
    }).catch((error) => {
        console.log('Saving failed:', error);
    });
}
defineExpose({
    saveData
})


</script>

<style>
.ce-toolbar .ce-toolbar__content .ce-toolbar__actions .ce-toolbar__plus {
    color: #ffffff;
}

.ce-toolbar .ce-toolbar__content .ce-toolbar__actions .ce-toolbar__settings-btn {
    color: #ffffff;
}

.ce-popover {
    background-color: #303030;
}

.ce-popover__item-icon {
    background-color: #242424;
}

.ce-popover__item:hover:not(.ce-popover__item--no-visible-hover) {
    background-color: #949494;
}

.ce-toolbar__settings-btn:hover {
    background-color: #949494;
}

.ce-toolbar__plus:hover {
    background-color: #949494;
}

.cdx-list__item {
    list-style: auto;
}

h3.ce-header {
    font-size: 20px;
}

h2.ce-header {
    font-size: 30px;
}

h4.ce-header {
    font-size: 10px;
}

@media (max-width: 650px) {
    .ce-toolbar__plus {
        background-color: transparent;
    }
    .ce-toolbar__settings-btn {
        background-color: transparent;
    }
}
</style>
