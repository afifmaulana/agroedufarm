<!-- ALL JS FILES -->
<script src="{{ asset('assets/js/all.js') }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/timeline.min.js') }}"></script>
<script>
    timeline(document.querySelectorAll('.timeline'), {
        forceVerticalMode: 700,
        mode: 'horizontal',
        verticalStartPosition: 'left',
        visibleItems: 4
    });
</script>
