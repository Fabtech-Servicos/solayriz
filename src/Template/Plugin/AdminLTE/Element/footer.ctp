<footer class="main-footer">
  <?php if (isset($layout) && $layout == 'top'): ?>
  <div class="container">
  <?php endif; ?>
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.5
    </div>
      <strong>Solayriz © <?= date('Y') ?>. Todos os direitos reservados </strong>
  <?php if (isset($layout) && $layout == 'top'): ?>
  </div>
  <?php endif; ?>
</footer>
