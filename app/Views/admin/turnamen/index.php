<?= $this->include('admin/partial/header') ?>
<?= $this->include('admin/partial/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><i class="fas fa-users"></i>Tournament List</h1>
    </div>
    <div class="section-body">
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Type Sport</th>
            <th>Date/time</th>
            <th>Participant</th>
            <th>Location</th>
            <th>Organizer</th>
            <th>View</th>
          </tr>
        </thead>
        <tbody>
            <?php $n=1; foreach ($tournament as $evnt) : ?>
          <tr>            
            <td><?= $n < 10 ? '0' . $n++ : $n++; ?></td>
            <td><?= $evnt['title']; ?></td>
            <td><?= $evnt['type_sport']; ?></td>
            <td><?= $evnt['date_column'], " (", $evnt['time'], ")"; ?></td>
            <td><?= $evnt['participant']; ?></td>
            <td><?= $evnt['location']; ?></td>
            <td><?= $evnt['organizer']; ?></td>
            <td>
              <div class="button">
                <button class="button-action">
                  <i class="fas fa-bars"></i>
                </button>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
        </tr>
        </tbody>
      </table>
    </div>
  </section>

</div>

<?= $this->include('admin/partial/footer') ?>