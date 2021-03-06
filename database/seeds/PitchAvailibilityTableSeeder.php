    <?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PitchAvailibilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pitch_availibility')->truncate();

       // $tournament = DB::table('tournaments')->take(3)->select('id')->get()->toArray();
       // $pitch = DB::table('pitches')->take(3)->select('id')->get()->toArray();


        DB::table('pitch_availibility')->insert([
          [
          'id'=>1,
          'tournament_id' => 4,
          'pitch_id' => 1,
          'stage_no' => '1',
          'stage_start_date' => '2017-04-18',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-18',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-18',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>2,
          'tournament_id' => 4,
          'pitch_id' => 1,
          'stage_no' => '2',
          'stage_start_date' => '2017-04-19',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-19',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-19',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>3,
          'tournament_id' => 4,
          'pitch_id' => 1,
          'stage_no' => '3',
          'stage_start_date' => '2017-04-20',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-20',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-20',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

          [
          'id'=>4,
          'tournament_id' => 4,
          'pitch_id' => 2,
          'stage_no' => '1',
          'stage_start_date' => '2017-04-18',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-18',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-18',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>5,
          'tournament_id' => 4,
          'pitch_id' => 2,
          'stage_no' => '2',
          'stage_start_date' => '2017-04-19',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-19',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-19',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>6,
          'tournament_id' => 4,
          'pitch_id' => 2,
          'stage_no' => '3',
          'stage_start_date' => '2017-04-20',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-20',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-20',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>7,
          'tournament_id' => 4,
          'pitch_id' => 3,
          'stage_no' => '1',
          'stage_start_date' => '2017-04-18',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-18',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-18',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>8,
          'tournament_id' => 4,
          'pitch_id' => 3,
          'stage_no' => '2',
          'stage_start_date' => '2017-04-19',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-19',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-19',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>9,
          'tournament_id' => 4,
          'pitch_id' => 3,
          'stage_no' => '3',
          'stage_start_date' => '2017-04-20',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-20',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-20',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

          [
          'id'=>10,
          'tournament_id' => 4,
          'pitch_id' => 4,
          'stage_no' => '1',
          'stage_start_date' => '2017-04-18',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-18',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-18',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>11,
          'tournament_id' => 4,
          'pitch_id' => 4,
          'stage_no' => '2',
          'stage_start_date' => '2017-04-19',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-19',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-19',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>12,
          'tournament_id' => 4,
          'pitch_id' => 4,
          'stage_no' => '3',
          'stage_start_date' => '2017-04-20',
          'stage_start_time' => '10:00:00',
          'stage_continue_date' => '2017-04-20',
          'break_start_time' => '10:00:00',
          'break_end_time' => '10:00:00',
          'stage_end_date' => '2017-04-20',
          'stage_end_time' => '17:30:00',
          'stage_capacity' => '450',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>13,
          'tournament_id' => 5,
          'pitch_id' => 5,
          'stage_no' => '1',
          'stage_start_date' => '2017-04-15',
          'stage_start_time' => '9:00:00',
          'stage_continue_date' => '2017-04-15',
          'break_start_time' => '9:00:00',
          'break_end_time' => '9:00:00',
          'stage_end_date' => '2017-04-15',
          'stage_end_time' => '18:30:00',
          'stage_capacity' => '570',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
           [
          'id'=>14,
          'tournament_id' => 5,
          'pitch_id' => 5,
          'stage_no' => '2',
          'stage_start_date' => '2017-04-16',
          'stage_start_time' => '9:00:00',
          'stage_continue_date' => '2017-04-16',
          'break_start_time' => '9:00:00',
          'break_end_time' => '9:00:00',
          'stage_end_date' => '2017-04-16',
          'stage_end_time' => '18:30:00',
          'stage_capacity' => '570',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>15,
          'tournament_id' => 5,
          'pitch_id' => 6,
          'stage_no' => '1',
          'stage_start_date' => '2017-04-15',
          'stage_start_time' => '9:00:00',
          'stage_continue_date' => '2017-04-15',
          'break_start_time' => '9:00:00',
          'break_end_time' => '9:00:00',
          'stage_end_date' => '2017-04-15',
          'stage_end_time' => '18:30:00',
          'stage_capacity' => '570',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
          [
          'id'=>16,
          'tournament_id' => 5,
          'pitch_id' => 6,
          'stage_no' => '2',
          'stage_start_date' => '2017-04-16',
          'stage_start_time' => '9:00:00',
          'stage_continue_date' => '2017-04-16',
          'break_start_time' => '9:00:00',
          'break_end_time' => '9:00:00',
          'stage_end_date' => '2017-04-16',
          'stage_end_time' => '18:30:00',
          'stage_capacity' => '570',
          'break_enable' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);

    }
}
