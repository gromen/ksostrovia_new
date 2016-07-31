<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package global
 */

if ( ! is_dynamic_sidebar() ) {
	return;
}
?>
  <div class="small-12 medium-5 column">
    <h3>Tabela IV ligi 2016/2017</h3>
    <div class="row">
      <div class="small-12 column">
        <aside id="secondary" class="widget-area" role="complementary">
          <table class="table table-league hover">
            <tr>
              <th class="text-left">Lp</th>
              <th class="text-left">Drużyny</th>
              <th class="text-center">Mecze</th>
              <th class="text-center">Pkt</th>
              <th class="text-center">Bramki</th>
            </tr>
            <tr>
              <td>1.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>6.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>7.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>8.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>9.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>10.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>11.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>12.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>13.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>14.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>15.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>16.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>17.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
            <tr>
              <td>18.</td>
              <td>Ostrovia Ostrów Mazowiecka</td>
              <td class="text-center">16</td>
              <td class="pkt text-center">38</td>
              <td class="text-center">40:20</td>
            </tr>
          </table>

          <?php if(dynamic_sidebar('upcoming_matches'));
            get_sidebar('upcoming_matches');
           ?>

        </aside><!-- #secondary -->
      </div>
    </div>
  </div><!-- .col-md-4>-->
</div><!-- .row -->
