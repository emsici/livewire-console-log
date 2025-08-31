<script>
    document.addEventListener('livewire:load', () => {
        Livewire.on('LivewireConsoleLog', ({ messages }) => {
            messages.forEach(([text, style]) => {
                console.log(`%c${text}`, style ?? '');
            });
        });
    });
</script>
