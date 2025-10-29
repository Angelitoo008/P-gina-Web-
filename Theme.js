<script>
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme === 'light') {
    localStorage.setItem('light')
  } else{
    localStorage.setItem('dark')
  }
</script>