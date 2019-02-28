<section class="section" id="app-6">
    <label class="label" for="">Component: Modal</label>

    <button class="button is-primary" @click="modalShown = true">Show Modal</button>

    <Modal title="Modal Title" v-show="modalShown" @close="modalShown = false">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </Modal>
</section><!-- section -->