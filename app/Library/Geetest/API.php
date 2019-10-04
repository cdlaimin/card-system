<?php
namespace App\Library\Geetest; use Illuminate\Support\Facades\Session; class API { private $geetest_conf = null; public function __construct($sp8b174b) { $this->geetest_conf = $sp8b174b; } public static function get() { $spf448d5 = config('services.geetest.id'); $sp16f27e = config('services.geetest.key'); if (!strlen($spf448d5) || !strlen($sp16f27e)) { return null; } $spe26fcd = new Lib($spf448d5, $sp16f27e); $sp95525e = time() . rand(1, 10000); $sp964b7d = $spe26fcd->pre_process($sp95525e); $sp44edeb = json_decode($spe26fcd->get_response_str()); Session::put('gt_server', $sp964b7d); Session::put('gt_user_id', $sp95525e); return $sp44edeb; } public static function verify($sp789e86, $sp97f183, $spf2601a) { $spe26fcd = new Lib(config('services.geetest.id'), config('services.geetest.key')); $sp95525e = Session::get('gt_user_id'); if (Session::get('gt_server') == 1) { $sp66d196 = $spe26fcd->success_validate($sp789e86, $sp97f183, $spf2601a, $sp95525e); if ($sp66d196) { return true; } else { return false; } } else { if ($spe26fcd->fail_validate($sp789e86, $sp97f183, $spf2601a)) { return true; } else { return false; } } } }