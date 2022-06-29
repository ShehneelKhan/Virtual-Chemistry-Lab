using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class onBatteryClick : MonoBehaviour
{
     // Specifying when object is dragged


    public GameObject redwire;
    public GameObject redwire_2;
    public GameObject blackwire;
    public GameObject blackwire_2;

    void OnMouseDown() {
       if(CheckPosLab7.flag==true){
            redwire.SetActive(true);
            redwire_2.SetActive(true);
            blackwire.SetActive(true);
            blackwire_2.SetActive(true);
        }
            }
}


 