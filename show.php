<?php
include_once('connect3.php');
$sql="select * from suryak";
?>
<!DOCTYPE html>
<html>
    <body>
    <table align="centre" border="1px" style="900px; line-height:20px;">
    <tr>
            <th>S.No</th>
            <th>Name of Self Help Group</th>
            <th>State of Self Help Group</th>
            <th>District of Self Help Group</th>
            <th>Self Help Group Registration Number</th>
            <th>Number of Womens Associated in the Self Help Group</th>
            <th>Number of Married Womens Associated in the Self Help Group</th>
            <th>Average age of Womens Associated in the Self Help Group</th>
            <th>Bank Account Number</th>
            <th>Previous Total Loan Amount</th>
            <th>Interest on which past loan was given(in %)</th>
            <th>Months Taken to repay previous loan amount</th>
            <th>Interest on which present loan is given(in %)</th>
            <th>Time duration for which present loan is given(in months)</th>
            <th>Interest on which loan is given(in %)</th>
            <th>Time duration for which loan is given(in months)</th>

            <th>Aadhar Card Number of Self help group leader</th>
            <th>Mobile Number of SHG</th>

        </tr>
<?php
while($rows=mysql_fetch_assoc($sql))?>
{
    <tr>
    <th><?php echo $rows['S.No']?></th>
    <th><?php echo $rows[Name_of_Self_Help_Group]; ?></th>
    <th><?php echo $rows[State_of_Self_Help_Group]; ?></th>
    <th><?php echo $rows[District_of_Self_Help_Group]; ?></th>
    <th><?php echo $rows[Self_Help_Group_Registration_Number]; ?></th>
    <th><?php echo $rows[Number_of_Womens_Associated_in_the_Self_Help_Group]; ?></th>
    <th><?php echo $rows[Number_of_Married_Womens_Associated_in_the_Self_Help_Group]; ?></th>
    <th><?php echo $rows[Average_age_of_Womens_Associated_in_the_Self_Help_Group]; ?></th>
    <th><?php echo $rows[Bank_Account_Number]; ?></th>
    <th><?php echo $rows[Previous_Total_Loan_Amount]; ?></th>
    <th><?php echo $rows[Interest_on_which_past_loan_was_given]; ?></th>
    <th><?php echo $rows[Months_Taken_to_repay_previous_loan_amount]?></th>
    <th><?php echo $rows[Interest_on_which_present_loan_is_given]; ?></th>
    <th><?php echo $rows[Time_duration_for_which_present_loan_is_given(in_months)]; ?></th>
    <th><?php echo $rows[Interest_on_which_loan_is_given]; ?></th>
    <th><?php echo $rows[Time_duration_for_which_loan_is_given(in_months)]; ?></th>

    <th><?php echo $rows[Aadhar_Card_Number_of_Self_help_group_leader]; ?></th>
    <th><?php echo $rows[Mobile_Number_of_SHG]; ?></th>
    </tr>
}
</table>
</body>
    </html>