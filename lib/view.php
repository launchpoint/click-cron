<?

function cron_msg()
{
  $args = func_get_args();
  echo "<tr>";
  foreach($args as $arg)
  {
    echo "<td>".h($arg)."</td>";
  }
  echo "</tr>";
}