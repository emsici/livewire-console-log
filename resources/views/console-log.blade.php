<script>
    document.addEventListener('livewire:load', () => {
        const handle = ({ messages }) => {
            messages.forEach(message => {
                if (Array.isArray(message)) {
                    const [text, style] = message;
                    console.log(`%c${text}`, style ?? '');
                } else {
                    console.log(message);
                }
            });
        };

        Livewire.on('LivewireConsoleLog', handle);
        Livewire.on('console-log', handle);
    });
</script>
