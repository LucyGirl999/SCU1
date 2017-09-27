<?php
/* Smarty version 3.1.30, created on 2017-09-26 12:49:58
  from "D:\webSoftWare\wamp64\www\SCU\tpls\admin\scuManagement_2_1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca4cf6d323d5_66893214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b18b4ae4ddafa74a4761b4a96cc7a3571314bd0' => 
    array (
      0 => 'D:\\webSoftWare\\wamp64\\www\\SCU\\tpls\\admin\\scuManagement_2_1.html',
      1 => 1481032470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ca4cf6d323d5_66893214 (Smarty_Internal_Template $_smarty_tpl) {
?>
				<div class="right_check">
					<div class="nowPosition"><span>你现在的位置：审核信息>年度注册审核</span></div>
					<div class="changeLe">
						<div class="change_table" id="check">
							<table>
								<tr>
									<td class="change_table_bgk1" style="width: 20%">社团名称</td>
									<td class="change_table_bgk2" style="width:30%"></td>
									<td class="change_table_bgk1" style="width: 20%">注册时间</td>
									<td class="change_table_bgk2" style="width:30%"></td>
								</tr>
								<tr>
									<td class="change_table_bgk1" style="width: 20%">创始人</td>
									<td class="change_table_bgk2" style="width:30%"></td>
									<td class="change_table_bgk1" style="width: 20%">创始时间</td>
									<td class="change_table_bgk2" style="width:30%"></td>
								</tr>
								<tr>
									<td class="change_table_bgk1" style="width: 20%">指导老师</td>
									<td class="change_table_bgk2" style="width:30%"></td>
									<td class="change_table_bgk1" style="width: 20%">联系方式</td>
									<td class="change_table_bgk2" style="width:30%"></td>
								</tr>
								<tr>
									<td class="change_table_bgk1" style="width: 20%">现任负责人</td>
									<td class="change_table_bgk2" style="width:30%"></td>
									<td class="change_table_bgk1" style="width: 20%">联系方式</td>
									<td class="change_table_bgk2" style="width:30%"></td>
								</tr>
								<tr>
									<td class="change_table_bgk1" style="width: 20%">财务负责人</td>
									<td class="change_table_bgk2" style="width:30%"></td>
									<td class="change_table_bgk1" style="width: 20%">联系方式</td>
									<td class="change_table_bgk2" style="width:30%"></td>
								</tr>
								<tr>
									<td class="change_table_bgk1" style="width: 20%">入会条件</td>
									<td class="change_table_bgk2" style="width:30%"></td>
									<td class="change_table_bgk1" style="width: 20%">会员人数</td>
									<td class="change_table_bgk2" style="width:30%"></td>
								</tr>
								<tr class="change_table_textarea">
									<td class="change_table_bgk1" style="width:20%">社团宗旨</td>
									<td class="change_table_bgk2" style="width:80%" colspan="3"></td>
								</tr>
								<tr class="change_table_textarea">
									<td class="change_table_bgk1" style="width:20%">社团简介</td>
									<td class="change_table_bgk2" style="width:80%" colspan="3"></td>
								</tr>
								<tr class="change_table_textarea">
									<td class="change_table_bgk1" style="width:20%">年度荣誉</td>
									<td class="change_table_bgk2" style="width:80%" colspan="3"></td>
								</tr>
							</table>
						</div>
						<div class="change_table_check">
							<input type="submit" class="change_check_sbt" onclick="yearCheckSubmit(1)" value="审核通过">
							<input type="submit" class="change_check_sbt" onclick="yearCheckSubmit(2)" value="审核不通过">
							<input type="submit" class="change_check_sbt" id="check_return" name="" value="返回">
						</div>
					</div>
				</div><?php }
}
