using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ChangeSizeRetort : MonoBehaviour
{
     // Specifying when object is dragged
    void OnMouseDown() {
       transform.localScale = new Vector3 (0.8f,0.52f,0);
        }
}


 