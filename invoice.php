<?php
/**
 * Run PDF Converter
 */
include ("php_to_pdf/html2pdf.class.php");
ob_start();
?>

	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body {
			color: #5f5f5f;
			font-family: 'Century Gothic', sans-serif;
			font-weight: normal;
			padding: 0;
			margin: 0;
			text-align: left;
			line-height: 1.5;
			width: 100%;
			border-spacing: 0;
			border-collapse: collapse;
		}
		table {
			border-spacing: 0;
			border-collapse: collapse;
		}
		table td {
			position: relative;
		}
		.order-detail th {
			padding: 12px;
			background-color: #3385ce;
			font-weight: 400;
			font-size: 14px;
			color: #FFF;
		}
		.order-detail td {
			padding: 12px;
			line-height: 1.5;
			border-bottom: 1px solid #ccc;
		}
		.table-detail td {
			padding-right: 6px;
			padding-bottom: 6px;
			line-height: 1.5;
		}
		p {
			margin-bottom: 0;
		}
	</style>

<page backtop="0" backbottom="10mm">
<table>
		<tbody>
			<tr>
				<td style="background-color: #163249; padding: 24px;" width="714">

					<table>
						<tr>
							<td style="width: 400px; vertical-align: top; padding-right: 32px;">

								<table style="color: #FFF;">
									<tr>
										<td style="padding-bottom: 12px;">
											<p style="font-size: 11px; padding-left: 28px; margin-bottom: 2px;">Ekspedisi</p>
											<p style="font-size: 13px; position: relative; padding-left: 28px;">
												<img src="images/shipping-icon.png" alt="" style="width: 18px; height: auto; 	position: absolute; left: 0; top: 0; margin-right: 7px;">
												Ampalu (021 64312)
											</p>
										</td>
									</tr>
									<tr>
										<td style="padding-bottom: 12px;">
											<p style="font-size: 11px; padding-left: 28px; margin-bottom: 2px;">Penerima</p>
											<p style="font-size: 13px; position: relative; padding-left: 28px; color: #3385ce;">
												<img src="images/user-icon.png" alt="" style="width: 12px; height: auto; position: 	absolute; left: 4px; top: 0; margin-right: 7px;">
												Diana Chandra (0811654812)
											</p>
										</td>
									</tr>
									<tr>
										<td>
											<p style="font-size: 11px; padding-left: 28px; margin-bottom: 2px;">Alamat</p>
											<p style="font-size: 13px; position: relative; padding-left: 28px;">
												<img src="images/address-icon.png" alt="" style="width: 12px; height: auto; position: 	absolute; left: 4px; top: 0; margin-right: 7px;">
												Kantor DC Industries,<br>
												Jalan Pluit Karang Ayu Nomor 101,<br>
												Pluit, Penjaringan, Jakarta Utara<br>
												DKI Jakarta, 14450
											</p>
										</td>
									</tr>
								</table>

							</td>
							<td style="vertical-align: top;">
								<h1 style="color: #3385ce; font-weight: 400; margin: 0; font-size: 44px; line-height: 1;	">Invoice</h1>
								<p style="color: #FFF; font-size: 14px;">www.indopesoan.com</p>
								<br><br>
								<table style="color: #FFF; font-size: 11px;">
									<tr>
										<td style="padding-right: 8px; padding-bottom: 4px;">Nomor Order</td><td> : 	<strong>54310</strong></td>
									</tr>
									<tr>
										<td style="padding-right: 8px; padding-bottom: 4px;">Nomor Invoice</td><td> : 	<strong>201904110001</strong></td>
									</tr>
									<tr>
										<td style="padding-right: 8px; padding-bottom: 4px;">Tanggal Order</td><td> : <strong>11 	April 2019</strong></td>
									</tr>
									<tr>
										<td style="padding-right: 8px; padding-bottom: 4px;">Nama Customer</td><td> : 	<strong>Diana Chandra</strong></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>

				</td>
			</tr>
		</tbody>
	</table>

	<table width="714" class="order-detail" style="font-size: 12px;">
		<thead>
			<tr>
				<th width="65">SKU</th>
				<th width="235">Nama Barang</th>
				<th width="80" align="right">Harga/Unit</th>
				<th width="80" align="right">Qty</th>
				<th width="94" align="right">Total</th>
			</tr>
		</thead>

		<tbody>

			<tr>
				<td width="65" style="border-bottom: 2px solid #3385ce;">TJ34567890</td>
				<td width="235">
					<p><strong>Terpal A3 (Preorder)</strong></p>
					<P>4 x 6 Meter, Biru Silver</P>
				</td>
				<td width="80" align="right">120.000 / Pcs</td>
				<td width="80" align="right">10.000 Pcs</td>
				<td width="94" align="right">1.200.000.000</td>
			</tr>
			<tr>
				<td width="65" style="border-bottom: 2px solid #3385ce;">TJ34567890</td>
				<td width="235">
					<p><strong>Terpal Roll A3</strong></p>
					<P>2 x 100 Meter, Biru Silver</P>
				</td>
				<td width="80" align="right">500.000 / Roll</td>
				<td width="80" align="right">1000 Roll</td>
				<td width="94" align="right">500.000.000</td>
			</tr>
			<tr>
				<td width="65" style="border-bottom: 2px solid #3385ce;">TJ34567890</td>
				<td width="235">
					<p><strong>Mata Ikan</strong></p>
				</td>
				<td width="80" align="right">50.000 / Kg</td>
				<td width="80" align="right">50 Kg</td>
				<td width="94" align="right">2.500.000</td>
			</tr>

		</tbody>
	</table>

	<table width="width: 100%">
		<table>
			<tr>
				<td style="padding: 24px 12px 0; vertical-align: top;">

					<table>
						<tr>
							<td style="padding-right: 32px; width: 478px;">
								<table>
									<tr>
										<td style="margin-bottom: 12px; padding-bottom: 16px;">
											<p style="font-size: 10px; margin-bottom: 4px;">Metode Pembayaran :</p>
											<p>Transfer Bank</p>
										</td>
									</tr>
									<tr>
										<td style="margin-bottom: 12px; padding-bottom: 16px;">
											<p style="font-size: 10px; margin-bottom: 4px;">Rekening Transfer :</p>
											<p>Bank Central Asia - 954561236 a/n <strong>PT Putra Cananda Mandiri</strong></p>
										</td>
									</tr>
									<tr>
										<td style="margin-bottom: 12px; padding-bottom: 16px;">
											<p style="font-size: 10px; margin-bottom: 4px;">Pembayaran diterima :</p>
											<p>3 September 2018 | 14:02</p>
										</td>
									</tr>
								</table>
							</td>
							<td>
								<table style="font-size: 12px;">
									<tr>
										<td style="padding-bottom: 12px; padding-right: 16px; text-align: right;">Total Pembelian</td>
										<td style="text-align: right;" width="125">1.702.500.000</td>
									</tr>
									<tr style="color: red;">
										<td style="padding-bottom: 12px; padding-right: 16px; text-align: right;">Discount</td>
										<td style="text-align: right;">1.250.000</td>
									</tr>
									<tr>
										<td style="padding-bottom: 12px; padding-right: 16px; text-align: right;">Kode Unik*</td>
										<td style="text-align: right;">310</td>
									</tr>
									<tr>
										<td style="padding: 6px; padding-right: 16px; text-align: right; background-color: #3385ce; color: #FFF;">Total Bayar</td>
										<td style="text-align: right; background-color: #3385ce; padding: 6px; color: #FFF;">1.690.000.310</td>
									</tr>
								</table>
								<p style="font-size: 10px; text-align: right; color: #888; padding-top: 12px; width: 100px; line-height: 1.5;">*) Kode unik digunakan untuk mempermudah<br>proses verifikasi pembayaran</p>
							</td>
						</tr>
					</table>

				</td>
			</tr>
		</table>
	</table>

	<page_footer>
		<table width="100%" style="background-color: #e4e4e4;">
			<tr>
				<td style="width: 170px; padding: 24px; vertical-align: top;">

					<p style="font-size: 11px; margin-bottom: 4px;">Alamat</p>
					<p style="margin-bottom: 0;">
						Jalan Gedong Panjang No 20F,<br>
						Pekojan, Tambora, Jakarta Barat,<br>
						DKI Jakarta 11240
					</p>
				</td>
				<td style="width: 175px; padding: 24px; vertical-align: top;">

					<table>
						<tr>
							<td style="padding-bottom: 12px;">
								<p style="font-size: 11px; margin-bottom: 4px;">Email</p>
								<p style="margin-bottom: 0;">cs@indopesona.com</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-size: 11px; margin-bottom: 4px;">Telepon</p>
								<p style="margin-bottom: 0;">(021) 55910956</p>
							</td>
						</tr>
					</table>

				</td>
				<td style="width: 160px; padding: 24px; vertical-align: top;">

					<img src="images/logo-gogreen.png" alt="" style="width: 100%; height: auto;">

				</td>
			</tr>
		</table>
	</page_footer>
</page>

<?php
$content = ob_get_clean();

$html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(0, 0, 0, 0));
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($content);
$html2pdf->Output('invoice.pdf', 'I');
?>
