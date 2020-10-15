<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Misc extends CI_Model {

    /**
     *  Models default constructor.
     */
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * Function fnGetDetails
     * Function to get the details from the requested table depending upon passed parameters
     * @param $strTableName - string -Table Name
     * @param string $strWhereColumnName - String - Where Clause.
     * @param string $intWhereColumnValue - Where clause value
     * @author Himanshu Charegaonkar
     * @access Public
     * @return mixed
     */
    function fnGetDetails($strTableName, $strWhereColumnName="", $intWhereColumnValue="")
    {
        # If particular column is present then return the details about the requested magazine.
        if ($strWhereColumnName != "") {
            $query = $this->db->get_where($strTableName, array($strWhereColumnName => $intWhereColumnValue));
        } else {
            # If particular column is not present then return the details about all the magazine.
            $query = $this->db->get($strTableName);
        }
        return $query->result_array();
    }

    /**
     * Function fnSaveRecords
     * Function save the given records into given table.
     * @param $strTableName - string - Table Name
     * @param $arrDetails - Array of records.
     * @author Himanshu Charegaonkar
     * @access Public
     * @return mixed
     */
    function fnSaveRecords($strTableName, $arrDetails)
    {
        $this->db->insert($strTableName, $arrDetails);
        return $this->db->insert_id();
    }

    /**
     * Function fnUpdateRecord
     * Function to update the record with the given the list of records.
     * @param $intGivenColumnName - string - column Name
     * @param $intColumnValue - String - column value
     * @param $strTableName - Table  Name
     * @param $arrRecords - Array of records.
     * @author Himanshu Charegaonkar
     * @access Public
     * @return mixed
     */
    function fnUpdateRecord($intGivenColumnName, $intColumnValue, $strTableName, $arrRecords)
    {
        $this->db->where($intGivenColumnName, $intColumnValue);
        return $this->db->update($strTableName, $arrRecords);
    }

    /**
     * Function fnCheckLoginCredentials
     * Function to check login credentials
     * @param $strUserName - string - user name
     * @param $strPassword - string - password
     * @param $strTableName - string - table name.
     * @author Himanshu Charegaonkar
     * @access Public
     * @return mixed
     */
    function fnCheckLoginCredentials($strUserName, $strPassword, $strTableName)
    {
        $array = array('username' => $strUserName, 'password' => $strPassword);
        $query = $this->db->get_where($strTableName, $array);
        return $query->result_array();
    }

    /**
     * Function fnDeleteRecords
     * Function to Delete records for given table and given records
     * @param $strTable - string - Table name
     * @param $arrRecords - array - array of records.
     * @return mixed
     * @author Himanshu Charegaonkar
     * @access Public
     */
    function fnDeleteRecords($strTable, $arrRecords)
    {
        return $this->db->delete($strTable, $arrRecords);
    }

    /**
     * Function fnMultipleWhere
     * Function to implement multiple where condition and get result.
     * @param $strTableName - Table Name
     * @param $arrWhereCond - Array of where conditions.
     * @return mixed
     * @author Himanshu Charegaonkar
     * @access Public
     */
    function fnMultipleWhere($strTableName, $arrWhereCond)
    {
        $query = $this->db->get_where($strTableName, $arrWhereCond);
        return $query->result_array();
    }

    /**
     * FUnction fnCheckLoginStatus
     * Function to check the login status and access level
     * @return bool
     * @author Himanshu Charegaonkar
     * @access Public
     */
    function fnCheckLoginStatus()
    {
        $arrSessionData = $this->session->all_userdata();
        $strUsername = $this->encrypt->decode($arrSessionData['username']);
        if($strUsername == "" || $strUsername == null) {
            redirect(base_url().'user/fnLogin');
            exit;
        }
        return true;
    }

    /**
     * Function fnCheckAccessForMember
     * Function to check the login status to access the member functionalists
     * @return bool
     * @author Himanshu Charegaonkar
     * @access Public
     */
    public function fnCheckAccessForMember()
    {
        $arrSessionData = $this->session->all_userdata();
        $strFirstName = $this->encrypt->decode($arrSessionData['first_name']);
        if($strFirstName == "" || $strFirstName == null) {
            redirect(base_url().'member/login');
            exit;
        }
        return true;
    }

}
