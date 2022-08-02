<!-- This is Working fine -->
<template id="home">
    <section class="bg-white" data-theme="light">
        <h1>
            <slot name="title">
                {{title}}
            </slot>
        </h1>
        <p>
            <slot name="description">
                {{description}}
            </slot>
        </p>
    </section>
</template>