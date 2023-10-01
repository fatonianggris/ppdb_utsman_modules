<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-INVOICE Sekolah Utsman</title>

    <style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }

    table {
        font-size: x-small;
    }

    tfoot tr td {
        font-weight: bold;
        font-size: x-small;
    }

    .gray {
        background-color: #f2c195
    }
    </style>

</head>

<body
    style="background-image: url('<?php echo base_url() . $page[0]->logo_website ?>'); opacity: 0.2; background-repeat: no-repeat;background-attachment: fixed;background-position: center;">
    <table width="100%">
        <tr>
            <td valign="top"><img src="<?php echo base_url() . $page[0]->logo_website ?>" alt="" width="150" /></td>
            <td align="right">
                <h2 style="color:#f77d0e"><?php echo $page[0]->nama_website; ?></h2>

                <?php echo $contact[0]->alamat; ?><br>
                <?php echo $contact[0]->nomor_telephone; ?> / <?php echo $contact[0]->no_handphone; ?><br>
                <?php echo $contact[0]->email; ?><br>
                <?php echo $contact[0]->url_website; ?><br>

                <h3 style="color:#1BC5BD ">INV/BIAYA MASUK #<?php echo $invoice[0]->nomor_formulir; ?></h3>
            </td>
        </tr>

    </table>

    <table width="100%">
        <tr>
            <td><strong>Dari:</strong> PPDB <?php echo ucwords(strtolower($page[0]->nama_website)); ?></td>
            <td><strong>Kepada:</strong> <?php echo ucwords(strtolower($invoice[0]->nama_lengkap)); ?> /
                <b><?php echo $invoice[0]->nomor_formulir; ?></b></td>
        </tr>

    </table>
    <br />

    <table width="100%">
        <thead style="background-color: #f2c195;">
            <tr>
                <th>#</th>
                <th>Nama Biaya</th>
                <th>Biaya Awal (Rp)</th>
                <th>Potongan (%)</th>
                <th>Sub Total (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <?php
					if (!empty($cost)) {
						$no=1;
						foreach ($cost as $key => $value) {
							?>
            <tr>
                <td scope="row">
                    <?php echo $no; ?>
                </td>
                <td>
                    <b><?php echo ucwords(strtolower($value->nama_biaya)); ?></b>
                </td>
                <td align="right">
                    <?php echo number_format($value->nominal, 0, ',', '.'); ?></td>
                <td align="right">
                    <?php
										if (!empty($voucher)) {
													foreach ($voucher as $key => $value_v) {
														if ($value->id_nama_biaya == $value_v->id_nama_biaya) {
															$id_array_voucher = explode(',', $invoice[0]->id_voucher);
															if (in_array($value_v->id_voucher, $id_array_voucher)) {
																echo $value_v->potongan;
															}
														}
													} //ngatur nomor urut
												}
												?>
                </td>
                <td align="right">
                    <?php
											$stat = false;
											if (!empty($voucher)) {
												foreach ($voucher as $key => $value_v) {
													if ($value->id_nama_biaya == $value_v->id_nama_biaya) {
														$id_array_voucher = explode(',', $invoice[0]->id_voucher);
														if (in_array($value_v->id_voucher, $id_array_voucher)) {
															echo number_format(($value->nominal) - ($value->nominal * $value_v->potongan / 100), 0, ',', '.');
															$stat = true;
														}
													}
												} //ngatur nomor urut
											}
											if ($stat == false) {
												echo number_format($value->nominal, 0, ',', '.');
											}
										?>
                </td>
            </tr>
            <?php
							$no++;
						} //ngatur nomor urut
				}
				?>
            <?php if ($invoice[0]->status_potongan == 1){ ?>
            <tr>
                <td>
                </td>
				<td>
                </td>
                <td colspan="2" align="right" style="color:#F64E60; font-weight:bold;">
                    <?php echo strtoupper($potongan[0]->nama_potongan); ?>
                </td>
                <td align="right" style="color:#F64E60; font-weight:bold;">
                    -<?php echo $potongan[0]->nominal_potongan; ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"></td>
                <td align="right">Total (Rp)</td>
                <td align="right" class="gray">Rp. <?php echo $invoice[0]->total_biaya; ?></td>
            </tr>
        </tfoot>
    </table>
    <br>
    <table width="100%">
        <thead>
            <tr>
                <th style="text-align: left;">Keterangan:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align="left" style="color:#F64E60; font-size: medium">
                    <i><b><?php echo strtoupper($invoice[0]->keterangan); ?></b></i>
				</td>
            </tr>
            <tr>
                <td align="left" style="color:#F64E60"> </td>
            </tr>
            <tr>
                <td align="left" style="color:#F64E60"> </td>
            </tr>
            <tr>
                <td align="left" style="color:#F64E60"> </td>
            </tr>
            <tr>
                <td align="center" style="color:#F64E60; font-size: xx-small"><b>*Dimohon untuk menyimpan bukti
                        E-INVOICE ini, Terima kasih.</b></td>
            </tr>
    </table>
</body>

</html>
